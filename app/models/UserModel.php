<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 8/15/2018
 * Time: 9:37 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
	private $table_name;

	public function __construct(){
        parent::__construct();
        $this->table_name = "account_user";
    }

    public function login($data){
    	// check error
    	$errorMessge = $this->checkUser($data["user_name"], $data["user_name"]);
    	return $errorMessage;
    }

    public function checkUser($user_name, $password){
    	$encrpted_password = $this->encryptPassword($user_name, $password);

    	$this->load->db("default");

    	$sql = "SELECT * FROM {$this->table_name} WHERE user_name='{$user_name}, password={$encrpted_password}"

    	//$result = query
    	//$result = query to array
    	if(count($result)) != 1){
			return "Invalid username and password";
		}
		return NULL;
    }

    public function encryptPassword($user_name, $password){
    	return md5($user_name) + md5($password);
    }

    public function decryptPassword($user_name, $password){

    }
}
