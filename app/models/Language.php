<?php

/*******************************************************************************
 * Language Model
 * -------------------------------
 * Class to store, modify current language
 *  
*******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Model{
	private const DEFAULT_LANGUAGE = 'simp_chinese';

    public function __construct(){
        parent::__construct();
    }
    
    public function getCurrentLanguage(){
    	if(!$this->session->has_userdata('language')){
			$this->setLanguage('simp_chinese');
			return 'simp_chinese';
		}
        return $this->session->userdata('language');
    }

    public function setLanguage($language){
    	$this->session->set_userdata('language', $language);
        return $language;
    }
}
