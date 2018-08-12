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

		// Set display data
		$data['current_lang'] = $current_lang;
		$data['lang'] = $lang;
		$data['menu'] = $menu;

		$this->load->model('SocialMedia');
		$data['social_media_list'] = $this->SocialMedia->getSocialMedia();

		$this->load->model('TopNav');
		$data['nav_drop_link'] = $this->TopNav->getDropDown();

		switch($menu){
			case 'home':
				$this->load->model('Promotion');
				$data['promotion_list'] = $this->Promotion->getPromotion();

				$this->load->model('Collaborator');
				$data['collaborator_list'] = $this->Collaborator->getCollaborator();

				$data['track_link'] = $this->TopNav->getTrackingLink();
				break;
			default:
				$data['header'] = $this->TopNav->getHeader($menu, $this->lang->line('nav'));
				if(!$data['header']){
					show_404();
				}
				break;
		}
		return $data;
	}

	public function contactForm($menu){
    	$this->load->controller('EmailController');
    	$data["errorMessage"] = $this->EmailController->sendEmail;
    	var_dump($data["errorMessage"]);
		$this->index($menu);
	}
}
