<?php
/*******************************************************************************
 * Base Controller
 * -------------------------------
 * 
 *  
*******************************************************************************/


defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Language');
    }

	public function index($menu="home"){
        // Get Language
        $current_lang = $this->Language->getCurrentLanguage();
        $lang = $this->lang->load("base", $current_lang);

        // Set display data
        $data = [
            'current_lang' => $current_lang,
            'lang' => $lang,
            'menu' => $menu
        ];

        $this->load->view('base', $data);
	}
        
    public function menu($menu){
        $this->index($menu);
    }

    public function switchLanguage($lang, $menu) {
        $this->Language->setLanguage($lang);
        $this->menu($menu);
    }
}
