<?php

/*******************************************************************************
 * Collaborator Model
 * -------------------------------
 * Class to get set collaborators
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class Collaborator extends CI_Model{
	private $collaborator_list = array();

	public function __construct(){
		parent::__construct();
	}

	public function getCollaborator(){
		if(!$this->collaborator_list){
			$this->setCollaborator();
		}
		return $this->collaborator_list;
	}

	public function setCollaborator($collaborators = array()){
		$this->collaborator_list['link']['ems'] = "https://www.ems.post/en/global-network/tracking";
		$this->collaborator_list['link']['tnt'] = "https://www.tnt.com/express/zh_cn/site/home.html";
		$this->collaborator_list['link']['china_post'] = "http://www.chinapost.com.cn/";
		$this->collaborator_list['link']['qyin'] = "http://www.gdqiying.com/";
		$this->collaborator_list['link']['sf'] = "http://www.sf-express.com/";
//		$this->collaborator_list['link']['hengqin'] = "";



		$this->collaborator_list['logo']['ems'] = "ems_logo.png";
		$this->collaborator_list['logo']['tnt'] = "tnt_logo.png";
		$this->collaborator_list['logo']['china_post'] = "china_post_logo.png";
		$this->collaborator_list['logo']['qyin'] = "qyin_logo.jpeg";
		$this->collaborator_list['logo']['sf'] = "sf_logo.png";
//		$this->collaborator_list['path']['hengqin'] = "";


//		$this->collaborator_list = $collaborators;
	}
}

