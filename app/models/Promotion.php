<?php

/*******************************************************************************
 * Collaborator Model
 * -------------------------------
 * Class to get set collaborators
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Model{
	private $promotion_list = array();

	public function __construct(){
		parent::__construct();
	}

	public function getPromotion(){
		if(!$this->promotion_list){
			$this->setPromotion();
		}
		return $this->promotion_list;
	}

	public function setPromotion($promotions = array()){
		$this->promotion_list['1'] = array();
		$this->promotion_list['1']['subtitle'] = "Send international shipments";
		$this->promotion_list['1']['picture'] = "carousel_1.jpg";
		$this->promotion_list['1']['date'] = "12-05-2018";

		$this->promotion_list['2'] = array();
		$this->promotion_list['2']['subtitle'] = "Send international shipments";
		$this->promotion_list['2']['picture'] = "carousel_2.jpg";
		$this->promotion_list['2']['date'] = "12-05-2018";

	}
}

