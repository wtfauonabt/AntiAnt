<?php
/*******************************************************************************
 * List Tables
 * -------------------------------
 * List parameters to get table array
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');


class ListTable extends CI_Model{

	private $headers;

	private $search_field;
	private $search_value;
	private $sort_field;


	public function __construct(){
		parent::__construct();
	}

	public function setHeaders($table_name){
		$sql = "DESCRIBE {$table_name}";
		$query = $this->
		return ;
	}

	public function getHeaders(){
		if($this->headers){
			return $this->headers;
		}
		throw new ListException("headers not set");
	}

	public function setSortField($field){
		// Checks that field is relative to headers
		if($field){
			$this->sort_field = $field;
		}
	}

	public function sortList(){

	}
}
