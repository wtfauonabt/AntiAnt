<?php

 
defined('BASEPATH') OR exit('No direct script access allowed');

class WmsController extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Language');
		
	}
	
	public function getIdInfo(){
		include_once 'simple_html_dom.php';
		// die('d');
		$rowData = array();
		$count = 0;
		$detail = array();
		// --get html
		$html = file_get_html('https://www.mexgroup.com/');

		// --get data
		foreach($html->find('tr') as $element):    
		   	// foreach($html->find('td') as $element) :
			 // echo $element . '<br>';
				
			if ($count < 35){
		    foreach($element->find('td') as $subelement):

		    	array_push($detail, $subelement);

		    	echo $subelement . '<br>';

			endforeach;

			echo "<br>";
			array_push($rowData, $detail);

			$count += 1;
		}


		endforeach;

			}

		
}