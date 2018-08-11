<?php

/*******************************************************************************
 * Top Nav Model
 * -------------------------------
 * Class to get set links for drop down menu in top_nav
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class TopNav extends CI_Model{
	private $nav_drop_link = array();
	private $tracking_link;

	public function __construct(){
		parent::__construct();
		$this->tracking_link = "http://www.ems.com.cn/mailtracking/e_you_jian_cha_xun.html";
	}

	public function getDropDown(){
		if(!$this->nav_drop_link){
			$this->setDropDown();
		}
		return $this->nav_drop_link;
	}

	public function setDropDown($nav_drop_link = array()){
		if($nav_drop_link){
			$this->nav_drop_link = $nav_drop_link;
		}
		$this->nav_drop_link["quick"]["tracking"] 	= $this->tracking_link;
//		$this->nav_drop_link["quick"]["faq"] 		= "faq";
		$this->nav_drop_link["about"]["profile"] 	= "profile";
		$this->nav_drop_link["about"]["history"] 	= "history";
		$this->nav_drop_link["service"]["expertise"]= "expertise";
		$this->nav_drop_link["support"]["contact"]	= "contact";
	}

	public function getHeader($menu, $lang){
		foreach($lang['header'] as $header => $value){
			if(isset($lang[$header])){
				foreach($lang[$header] as $key => $value){
					if ($menu === $key) {
						return $header;
					}
				}
			}
		}
		return NULL;
	}

	public function getTrackingLink(){
		return $this->tracking_link;
	}
}

