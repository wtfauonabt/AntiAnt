<?php

 
defined('BASEPATH') OR exit('No direct script access allowed');

class FakeIdController extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Language');
		
	}
	
	public function getIdInfo(){
		include_once 'app/models/simple_html_dom.php';
		$person = array();
		// --get html
		$html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

		// get header 
		$header = $this -> getHeader($html);
		$person = $this -> personInfo($html);
		$comb_h_p = $this -> combineHP($header, $person);
	}

	// get header 
	public function getHeader($html){
		$header_mapping = array('name' => 'Name',
								'id' => 'Chinese Id Card Number',
								'gender' => 'Gender',
								'bday' => 'Birthday',
								'age' => 'Age',
								'address' => 'Address');
		$header_list = array();

		foreach($html->find('th') as $header):

			$header = $this -> removTag($header);
			if (in_array($header, $header_mapping) && ($header == current($header_mapping))) {
				$header_list [] = key($header_mapping);
			}
			next($header_mapping);

		endforeach;
		return $header_list;

	}


	// remove space and tags
	public function removTag($content){
		$content = trim($content);
		$content = str_replace("<th>","", $content);
		$content = str_replace("</th>", "", $content);
		$content = str_replace("<tr>","", $content);
		$content = str_replace("</tr>", "", $content);
		$content = str_replace("<td>","", $content);
		$content = str_replace("</td>", "", $content);

		return $content;

		}

	public function personInfo($html){
		// --get data
		$count = 0;
		foreach($html->find('tr') as $element):    
			if ($count < 35){
			    foreach($element->find('td') as $subelement):

			    	$subelement = $this -> removTag($subelement);
			    	$person[] = $subelement;

				endforeach;
			$count += 1;
		}	


		endforeach;



	}

		


	public function getInfoArray($subelement){
		// $n = 0;
		// if ($n < 6){
		// 	$detail = array_fill($n , 1, $subelement);
		// 	var_dump($detail);
		// 	$n += 1;
		}

	

}