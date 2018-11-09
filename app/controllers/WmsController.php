<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class WmsController extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Language');
		
	}
	public function index($menu="wms_home"){
		include_once 'simple_html_dom.php';
	}
	public function getIdInfo(){
		die('d');
		$rowData = array();

		$detail = array();
		// --get html
		$html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

		// --get data
		foreach($html->find('tr') as $element):    
		   	// foreach($html->find('td') as $element) :
			 echo $element . '<br>';
				

		    foreach($element->find('td') as $subelement):

		    	array_push($detail, $subelement);

		    	echo $subelement . '<br>';

			endforeach;

			echo "<br>";
			array_push($rowData, $detail);

		endforeach;

			}

		
}