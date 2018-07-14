<?php
/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * 		http://example.com/index.php/welcome
 *	- or -
 * 		http://example.com/index.php/welcome/index
 *	- or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see https://codeigniter.com/user_guide/general/urls.html
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
        }

	public function index()
	{
            //Set basic Javascripts and CSS
            $this->load->view('base');
            
            //Set title
            $this->load->view('title');
            
            // Display nav bar
            $this->load->view('nav');
	}
        
        public function switchLanguage($language = "") {
            $language = ($language != "") ? $language : "english";
            $this->session->set_userdata('site_lang', $language);
            redirect(base_url());
        }
}
