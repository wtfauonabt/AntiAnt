<?php
/*******************************************************************************
 * Product Model
 * -------------------------------
 * Simple CRUD for Products
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');


class ProductModel extends CI_Model{

	private $table_name;

	public function __construct(){
		parent::__construct();
		$this->table_name = "";
	}

	public function createProduct(){

	}

	public function readProduct(){

	}

	public function updateProduct(){

	}

	public function deleteProduct(){

	}
}
