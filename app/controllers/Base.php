<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
        }

	public function index($menu="home")
	{
            $current_lang = "english";
            // Display side, top navbar, display title
            $lang = $this->lang->load("base", $current_lang);
            $data = [
                'en_title' => "Anti-Ant Logistic Limited",
                'cn_title' => "順水速遞",
                'current_lang' => $current_lang,
                'lang' => $lang,
                'menu' => $menu
            ];
            //Set basic Javascripts and CSS
            $this->load->view('base', $data);
	}
        
        public function home(){
            $this->index('home');
        }
        public function profile(){
            $this->index('profile');
        }
        public function expertise(){
            $this->index('expertise');
        }
        public function pricing(){
            $this->index('pricing');
        }
        public function tracking(){
            $this->index('tracking');
        }
        public function about(){
            $this->index('about');
        }
        public function contact(){
            $this->index('contact');
        }

        public function switchLanguage($language = "") {
            $language = ($language != "") ? $language : "english";
            $this->session->set_userdata('site_lang', $language);
            redirect(base_url());
        }
}
