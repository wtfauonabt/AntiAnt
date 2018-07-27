<?php

/*******************************************************************************
 * Language Model
 * -------------------------------
 * Class to store, modify current language
 *  
*******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Model{
    private $current_lang;


    public function __construct(){
        parent::__construct();
        $this->setLanguage("simp_chinese");
    }
    
    public function getCurrentLanguage(){
    	return $this->current_lang;
    }

    public function setLanguage($lang){
    	$this->current_lang = $lang;
        return $this->getCurrentLanguage();
    }
}
