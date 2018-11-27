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
		
		// var_dump($header);
		// get personal info
		$people = $this -> personInfo($html);
		// var_dump($people);
		// using header as key to every person
		
		// var_dump($comb_h_p);
	}


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


	

	public function personInfo($html){
		$person_list = array();
		$people_list = array();
		$i = 0;
		$count = 0;
		foreach($html->find('tr') as $element):    
			if ($count < 35){
				
			    foreach($element->find('td') as $subelement):
			    	if ($i < 6){

			    	$subelement = $this -> removTag($subelement);
			    	$person_list[] = $subelement;

					$i += 1;
				}
				elseif ($i = 6){
					$i = 0; 
					$people_list[] = $person_list;
				// next($people_list);
				}
				endforeach;
				
				

				// $header = $this -> getHeader($html);
				// $comb_h_p = $this -> combineHP($header, $people_list);
			$count += 1;
			}
			var_dump($people_list);
		endforeach;
		// return $comb_h_p;
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
	

	public function combineHP($he, $info){
		$info_order = array_combine($he, $info);
		return $info_order;
	}

}