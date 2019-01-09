<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 11/17/2018
 * Time: 3:48 AM
 */

class Declaration extends CI_Model
{

	private $input_mapping = array(
		'' => ' '
	);

	private $output_mapping = array(
		'' => ' '
	);


	public function __construct(){
		parent::__construct();
		$this->load->library('PHPExcel');
	}

	public function upload(){

	}

	public function output(){

	}

	private function readExcel(){
		if($this->input_mapping){

		}
	}

	private function writeExcel($data){
		if($this->output_mapping){

		}
	}
}
