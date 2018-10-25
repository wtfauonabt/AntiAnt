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
		$array = array();
		$array['usermodel'] = $this->load->model('UserModel');
		var_dump($array);
		$array['usermodel']->login();

		$array[] = "abc";

		$array[] = 123;

		$array[] = hanle();

	}

	public function handle($action){
		
		switch ($action){
			case('login'):
				$error = $this->login();
				break;
			case('signout'):
				break;
			default:
				$error = "Cannot find action";
		}
		echo "$error: "
		var_dump($error);
		echo "</br>";
		var_dump($error);
		if(isset($error) && $error != ''){
			$this->load->view("login_page");
		}else {
			$this->load->view("wms_home");
		}
		//view login
		
	}


	public function login(){
		// if(!) check if coming back is post /
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			echo "This is not a posted request</br>";
  			return("Not postback");
		}
		$data["user_name"] = $this->input->post('user_name');
		$data["password"] = $this->input->post('password');
		$errorMessage = $this->UserModel->login($data);
		if($errorMessage){
			return $errorMessage;
		}
		$this->session->user = $this->UserModel->getUser();

		// var_dump($this->session->user);

		// die('here');
		
	}

	public function isAuthorized($user){

	}

}
