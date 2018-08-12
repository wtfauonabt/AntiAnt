<?php
/*******************************************************************************
 * Base Controller
 * -------------------------------
 *
 *
 *******************************************************************************/


defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('EmailModel');
	}

	public function sendEmail(){
		$fields = $this->EmailModel->getFields();
		foreach($fields as $key => $value){
			$data[$key] = $this->input->post($key);
			if(!isset($data[$key])){
				// Check variable
				$this->checkForm($key, $data[$key]);
			}else{
				// Missing Variable
			}
		}

		$errorMessage = $this->EmailModel->sendEmail($data);
		return $errorMessage;
	}

	public function checkForm($key, $value){

	}
}
