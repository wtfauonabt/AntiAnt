<?php
/*******************************************************************************
 * Order Model
 * -------------------------------
 * Simple CRUD for Orders
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');


class OrderModel extends CI_Model{

	private $table_name;

	public function __construct(){
		parent::__construct();
		$this->table_name = "profile";
	}

	public function createProduct(){

	}

	public function readProduct(){

	}

	public function updateProduct(){

	}

	public function deleteProduct(){

	}

	public function getOrderList(){
		$this->load->model("wms/ListTable");
		$this->ListTable->setHeaders($this->table_name);
	}
}
