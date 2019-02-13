<?php

defined('BASEPATH') OR exit('No direct script access allowed');


Class UploadFileController extends CI_Controller {


	public function __construct(){	
		parent::__construct();
		$this->load->model('Language');
		$this->load->model('UploadFileModel');
	}



	public function getFile(){
		
		$file = $_FILES["file"];

		if ($_FILES["file"]["error"] >= 1){
			echo "upload failed";
		}
		elseif(($_FILES["file"]["type"] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") && ($_FILES["file"]["type"] != ".csv") && ($_FILES["file"]["type"] != "application/vnd.ms-excel")){
			// echo "it is not Excel file" . "<br>";
			// echo "file type: " . $_FILES["file"]["type"];
		}
		else{
			// echo "file name: " . $_FILES["file"]["name"] . "<br>";
			// echo "position: " . $_FILES["file"]["tmp_name"];
			
		}
		$file_name = $_FILES["file"]["name"];
		$destination = $_FILES["file"]["tmp_name"];
		$save_file = $this->excelGetInfo($destination , $file_name);
		// var_dump($save_file);
		echo "new position: " . $save_file["tmp_name"];
		return $save_file;


	}
		public function excelGetInfo($file_path, $file_name){
		// $file_path = "./src/test2_cvs.csv";
		// $file_path = getFile();

		$file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_path);
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);
		$import_file = $reader -> load($file_path);
		// GET SHEETS
		$sheet = $import_file -> getSheet(0);

		// 行
		$highest_row = $sheet -> getHighestRow();

		// $highest_column = $sheet -> getHighestColumn();

		foreach ($import_file->getWorksheetIterator() as $worksheet) {

    		$worksheets[$worksheet -> getTitle()] = $worksheet->toArray();
			}
		$title = $worksheets["Worksheet"][0];

		$info = $worksheets["Worksheet"];

		// var_dump($title);
		// echo "<br>";

		// var_dump($info);
		$result = array();
		for ($i=1; $i < $highest_row ; $i++) { 
			// var_dump($info[$i]);
			// echo "<br>";
			$result[] = array_combine($title, $info[$i]);

			
		}


 		$result_key = array_keys($result[0]);
  		//echo "header: ";
		// var_dump($result_key);

		// echo "<br>";
		// echo "<br>";
		
		$this ->UploadFileModel->newExcel($result_key , $result, $file_name);
        

	}

	

}