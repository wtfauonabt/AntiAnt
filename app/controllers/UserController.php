<?php
/**
 * Created by PhpStorm.
 * UserController: stanley
 * Date: 8/15/2018
 * Time: 9:36 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function handle($action){
		if(!$action){
			return("No Action");
		}
		switch ($action){
			case('login'):
				$this->login();
				break;
			case('signout'):
				break;
			default:
				return "Cannot find action";
		}
		
		//view login
	}


	public function login(){
		// if(!) check if coming back is post /
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  			return("Not postback")
		}
		$data["user_name"] = $this->input->post('user_name');
		$data["password"] = $this->input->post('password');

		$errorMessage = $this->UserModel->login($data);

		return $errorMessage;
	}

}
