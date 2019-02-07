<?php
/*******************************************************************************
 * WMS Controller
 * -------------------------------
 *
 *
 *******************************************************************************/


defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class WMS extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Language');

	}

	public function index($menu="orders"){
//		var_dump($menu);
//		$data = $this->getData($menu);
		$this->load->view('wms/declare/index');
		// $this->excelGetInfo();

	}

	public function menu($menu){
		$this->index($menu);

	}

	public function switchLanguage($lang, $menu) {
		$this->Language->setLanguage($lang);
		$this->menu($menu);
	}

	private function getData($menu){
		$data = array();

		// Get Language
		$current_lang = $this->Language->getCurrentLanguage();
		$lang = $this->lang->load("wms", $current_lang);

		// Set display data
		$data['current_lang'] = $current_lang;
		$data['lang'] = $lang;
		$data['menu'] = $menu;

//		$this->load->model('SocialMedia');
//		$data['social_media_list'] = $this->SocialMedia->getSocialMedia();

//		$this->load->model('WMSNav');
//		$data['nav_drop_link'] = $this->WMSNav->getDropDown();

		switch($menu){
			case 'orders':
				$this->load->model('wms/OrderModel');
				$data['orderlist'] = $this->OrderModel->getOrderList();
				break;
			case 'products':
				$this->load->model('ProductModel');
				$data['orderlist'] = $this->ProductModel->getOrderList();
				break;
			default:
//				$data['header'] = $this-WMSNav->getHeader($menu, $this->lang->line('nav'));
//				if(!$data['header']){
//					show_404();
//				}

				break;
		}
 
		return $data;
	}

	public function declaration($action){
		var_dump($action);
		exit;
	}

	public function excelGetInfo(){
		$file_path = "./src/test2_cvs.csv";
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
		// $largeArraySize = 0;

		// foreach($result as $array) {
		//    if(count($array) > $largeArraySize) {
		//      $largeArray = $array;
		//    }
		// }
		// var_dump($result);

 		$result_key = array_keys($result[0]);
  		//echo "header: ";
		// var_dump($result_key);

		// echo "<br>";
		// echo "<br>";
		
		$this -> newExcel($result_key , $result);
        

	}

	public function newExcel($result_key , $result){
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
 
        $filename = 'lol';
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');

	}
}
