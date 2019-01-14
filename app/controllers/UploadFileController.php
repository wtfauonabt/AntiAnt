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
			echo "it is not Excel file" . "<br>";
			echo "file type: " . $_FILES["file"]["type"];
		}
		else{
			echo "file name: " . $_FILES["file"]["name"] . "<br>";
			echo "position: " . $_FILES["file"]["tmp_name"];
			
		}
		$save_file = $this->UploadFileModel->saveFile($file);
		// var_dump($save_file);
		echo "new position: " . $save_file["tmp_name"];
		return $save_file;


	}


}