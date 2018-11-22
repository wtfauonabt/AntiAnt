<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class WmsController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Language');
	}
	public function index($menu="wms_home"){
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

}