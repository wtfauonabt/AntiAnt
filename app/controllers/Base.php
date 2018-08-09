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
		$data['current_lang'] = $current_lang;
		$data['lang'] = $lang;
		$data['menu'] = $menu;

        switch($menu){
			case 'home':
//				$this->load->model('Promotion');
				$this->load->model('Collaborator');

				$data['collaborator_list'] = $this->Collaborator->getCollaborator();
				break;
		}

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
