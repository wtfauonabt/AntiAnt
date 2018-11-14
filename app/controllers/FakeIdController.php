<?php

 
defined('BASEPATH') OR exit('No direct script access allowed');

class FakeIdController extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Language');
		
	}
	
	public function getIdInfo(){
		include_once 'simple_html_dom.php';
		// die('d');
		$rowData = array();
		$count = 0;
		$detail = array('name','id','gender','bday','age','address');

		// --get html
		$html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

		// --get data
		foreach($html->find('tr') as $element):    
		   	
				
			if ($count < 35){
		    foreach($element->find('td') as $subelement):

		    	$this->getInfoArray($subelement);
		    	// array_fill(, '');

		    	echo $subelement . '<br>';

			endforeach;

			// echo "<br>";
			array_push($rowData, $detail);
			
			$count += 1;
		}	

		endforeach;

	}	


	public function getInfoArray($subelement){
		$n = 0;
		if ($n < 6){
			$detail = array_fill($n , 1, $subelement);
			var_dump($detail);
			$n += 1;
		}

	}

}