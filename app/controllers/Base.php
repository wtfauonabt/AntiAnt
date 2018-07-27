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

        // Display side, top navbar, display title
        $current_lang = $this->Language->getCurrentLanguage();
        $lang = $this->lang->load("base", $current_lang);
        $data = [
            'current_lang' => $current_lang,
            'lang' => $lang,
            'menu' => $menu
        ];
        //Set basic Javascripts and CSS
        $this->load->view('base', $data);
	}
        
    public function menu($menu){
        $this->index($menu);
    }

    public function switchLanguage($language, $menu) {
        $this->Language->setLanguage($language);
        $this->menu($menu);
    }
}
