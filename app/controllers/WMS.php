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
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'NAME');
        $sheet->setCellValue('C1', 'AGE');
        $sheet->setCellValue('D1', 'GENDER');

        $writer = new Xlsx($spreadsheet);
 
        $filename = 'lol';
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
	

		
	}
}
