<?php

/*******************************************************************************
 * SocialMedia Model
 * -------------------------------
 * Class to get set links for social media
 *
 *******************************************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class SocialMedia extends CI_Model{
	private $social_media_list = array();

	public function __construct(){
		parent::__construct();
	}

	public function getSocialMedia(){
		if(!$this->social_media_list){
			$this->setSocialMedia();
		}
		return $this->social_media_list;
	}

	public function setSocialMedia($social_media = array()){
		if($social_media){
			$this->social_media_list = $social_media;
		}
		$this->social_media_list['weibo']['link'] 	= "https://www.weibo.com/6623733875/profile?topnav=1&wvr=6";
		$this->social_media_list['zhihu']['link'] 	= "https://www.zhihu.com/people/anti-antshun-shui-su-di/activities";
		$this->social_media_list['douban']['link'] 	= "https://www.douban.com/people/182602056/";
		$this->social_media_list['jianshu']['link'] = "https://www.jianshu.com/u/f3762bd7bc4e";
		$this->social_media_list['sina']['link'] 	= "http://blog.sina.com.cn/u/6623733875";
		$this->social_media_list['wechat']['link'] 	= "";

		$this->social_media_list['weibo']['icon'] 	= "fab fa-weibo";
		$this->social_media_list['zhihu']['logo'] 	= "zhihu.png";
		$this->social_media_list['douban']['logo'] 	= "douban.png";
		$this->social_media_list['jianshu']['logo'] = "jianshu.png";
		$this->social_media_list['sina']['logo'] 	= "sina.png";
		$this->social_media_list['wechat']['icon'] 	= "fab fa-weixin";
	}
}

