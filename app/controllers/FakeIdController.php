<?php

 
defined('BASEPATH') OR exit('No direct script access allowed');

class FakeIdController extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Language');
		
	}
	
	public function getIdInfo(){
		include_once 'app/models/simple_html_dom.php';
		$header_mapping = array('name' => 'Name',
								'id' => 'Chinese Id Card Number',
								'gender' => 'Gender',
								'bday' => 'Birthday',
								'age' => 'Age',
								'address' => 'Address');

		// $index_array = array('0' => 'name',
		// 					'1' => 'id',
		// 					'2' => 'gender',
		// 					'3' => 'bday',
		// 					'4' => 'age',
		// 					'5' => 'address');
		$header_list= array();
		// --get html
		$html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

		// get header 
		foreach($html->find('th') as $header):

			$header = $this -> removTag($header);

			if (in_array($header, $header_mapping) && ($header == current($header_mapping))) {
				$header_list [] = key($header_mapping);
			}
			next($header_mapping);

		endforeach;
	

		var_dump($header_list);

	}


	// remove space and tags
	public function removTag($header){
		$header = trim($header);
		$header = str_replace("<th>","", $header);
		$header = str_replace("</th>", "", $header);

		return $header;

		}
		// --get data
		// foreach($html->find('tr') as $element):    

		   	
				
		// 	if ($count < 35){
		

		//     foreach($element->find('td') as $subelement):

		//     	// $this->getInfoArray($subelement);
		//     	// array_fill(, '');

		    	

		// 	endforeach;

		// 	$count += 1;
		// }	

		// endforeach;

		


	public function getInfoArray($subelement){
		// $n = 0;
		// if ($n < 6){
		// 	$detail = array_fill($n , 1, $subelement);
		// 	var_dump($detail);
		// 	$n += 1;
		}

	

}