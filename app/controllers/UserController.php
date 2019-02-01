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
// 			$con = mysqli_connect('166.62.25.170', 'f01pxh0ycdd5', 'Auckland1!','antiant_backend');

// 			  $uname = mysqli_real_escape_string($con,$_POST['user_name']);
//     $password = mysqli_real_escape_string($con,$_POST['password']);
// 			  $sql_query = "select count(*) as cntUser,id from users where username='".$uname."' and password='".$password."'";
//         $result = mysqli_query($con, "SELECT * FROM account_user");
//         if (!$result) {
//     printf("Error: %s\n", mysqli_error($con));
//     exit();
// }
//         $row = mysqli_fetch_array($result);

//         $count = $row['id'];

//         if($count > 0){
//              $userid = $row['id'];
//             if( isset($_POST['remember']) ){

//                 // Set cookie variables
//                 $days = 30;
//                 // $value = encryptPassword($userid);
//                 setcookie ("remember",$value,time()+ ($days *  24 * 60 * 60 * 1000));
//             }
            
//             $_SESSION['userid'] = $userid; 
			$this->load->view("wms_home");
		}
	}
		//view login
		// die("2");
		
	}
	// public function index($menu="login_page"){
	// 	$data = $this->getData($menu);
 //        $this->load->view('base', $data);
	// }
	// public function menu($menu){
	//         $this->index($menu);
	//     }
	// public function switchLanguage($lang, $menu) {
 //        $this->Language->setLanguage($lang);
 //        $this->menu($menu);
 //    }
 //    private function getData($menu){
 //    	$data = array();
	// 	// Get Language
	// 	$current_lang = $this->Language->getCurrentLanguage();
	// 	$lang = $this->lang->load("base", $current_lang);

	// 	$data['current_lang'] = $current_lang;
	// 	$data['lang'] = $lang;
	// 	$data['menu'] = $menu;
	// 	$this->load->model('UserModel');
	// 	$data['user'] = $this->UserModel->getUser();

	// }

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
