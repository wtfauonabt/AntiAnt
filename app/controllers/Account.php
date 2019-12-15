<?php
/**
 * Created by PhpStorm.
 * UserController: stanley
 * Date: 8/15/2018
 * Time: 9:36 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property UserModel $UserModel
 * @property Language $Language
 */

class Account extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Language');
		
	}

	public function handle($action)
	{
		switch ($action){
			case('login'):
				$error = $this->login();
				break;
			case('signout'):
				break;
			default:
				$error = "Cannot find action";
		}
	
		if(isset($error) && $error != ''){
			//get language
			$data = array();
			$current_lang = $this->Language->getCurrentLanguage();
			$lang = $this->lang->load("base", $current_lang);
			$data['current_lang'] = $current_lang;
			$data['lang'] = $lang;
			//error message
  			$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
  			//back to login page
  			$this->load->view("login_page");
		}else {
			$this->load->view("wms_home");
		}
	}

	public function login()
	{
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			echo "This is not a posted request</br>";
  			return("Not postback");
		}
		$data["remember"] = $this->input->post('remember');

		$user = getAccountUser($this->input->post('user_name'), $this->input->post('password'));

		if(isset($user['error'])){
			return $user['error'];
		}

		$this->session->user = $user;
	}

	public function isAuthorized($user)
	{

	}

}
