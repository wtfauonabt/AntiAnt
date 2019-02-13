<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

Class UploadFileModel extends CI_Model {
	public function __construct(){
		parent::__construct();

	}

// 	public function saveFile($file){
// 	// echo "<br>" . exec('whoami')	;
// // 	vagrant@antiant:/var/www/html/src$ sudo chown www-data /var/www/html/src/image/
// // vagrant@antiant:/var/www/html/src$ sudo chmod 755 /var/www/html/src/image/

// 		$tmp_name = $file["tmp_name"];
// 		// new path
// 		$destination = '/tmp/testtest/' . $file['name'];
// 		//destination and name
// 		$new_file =  $_SERVER['Vagrant'] . $destination;
// 		$new_tmp_name = move_uploaded_file($tmp_name, $new_file);
// 		// Checking whether the file exists in the folder
// 		if (file_exists($destination)) {
// 			$file["tmp_name"] = $destination;
// 			echo "Upload successed <br>";
// 		}
// 		else{
// 			echo "upload failed<br>";
// 		}
		
		
// 		return $file;
		
// 	}
	public function newExcel($result_key , $result, $file_name){
		// $sheet->fromArray([$result_key], NULL, 'A1');
        // $sheet->setCellValue('A1', 'ID');
        // $sheet->setCellValue('B1', 'NAME');
        // $sheet->setCellValue('C1', 'AGE');
        // $sheet->setCellValue('D1', 'GENDER');
		// var_dump($result);
      	$spreadsheet = new Spreadsheet();
        $new_sheet = $spreadsheet->getActiveSheet();
        $new_sheet->fromArray($result_key, NULL, 'A1');
        // var_dump($result_key);
 
        foreach ($result as $key => $value) {
        	$row =  (int)$key + 2 ;
        	// var_dump($key);
        	// var_dump($value);
        	// echo "<br>";
        	$new_sheet -> setCellValue("A". $row , $value["Id"]);
        	$new_sheet -> setCellValue("B". $row , $value["Name"]);
        	$new_sheet -> setCellValue("C". $row , $value["Age"]);
        	$new_sheet -> setCellValue("D". $row , $value["Gender"]);
        	$new_sheet -> setCellValue("E". $row , $value["Class"]);
        }


        $writer = new Xlsx($spreadsheet);
 
        $filename = 'new_' . $file_name;
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');

	}

}