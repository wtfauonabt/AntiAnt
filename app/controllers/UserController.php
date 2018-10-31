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

		$this->load->model('Language');
		
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
	
		if(isset($error) && $error != ''){
			$this->load->view("login_page");
		}else {
			$this->load->view("wms_home");
		}
		//view login
		// die("2");
	}
	public function index($menu="login_page"){
		$data = $this->getData($menu);
        $this->load->view('base', $data);
	}
	public function menu($menu){
	        $this->index($menu);
	    }
	public function switchLanguage($lang, $menu) {
        $this->Language->setLanguage($lang);
        $this->menu($menu);
    }
    private function getData($menu){
    	$data = array();
		// Get Language
		$current_lang = $this->Language->getCurrentLanguage();
		$lang = $this->lang->load("base", $current_lang);

		$data['current_lang'] = $current_lang;
		$data['lang'] = $lang;
		$data['menu'] = $menu;
		$this->load->model('UserModel');
		$data['user'] = $this->UserModel->getUser();

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
