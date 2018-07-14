<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Language
 *
 * @author Stanley Yeung
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->lang->load("base","english");
    }
    
    public function setLang($lang){
        $data["language"] = $this->lang->load("base", $lang);
        return $data;
    }
}
