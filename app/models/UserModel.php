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

    private $user;

	public function __construct(){
        parent::__construct();
        $this->table_name = "account_user";
    }

    public function login($data){
    	// check error

		$errorMessage = $this->checkUser($data["user_name"], $data["user_name"]);
    	return $errorMessage;
    }

    public function checkUser($user_name, $password){

    	$encryptPassword = $this->encryptPassword($user_name, $password);

    	$this->load->database("backend");
        //
    	$sql = "SELECT * FROM {$this->table_name} WHERE user_name='{$user_name}' AND password='{$encryptPassword}'";

    	//$result = query
        $query = $this->db->query($sql);

         // Log user access and error
        // if($result){
           
        // } else {

        // }

    	//$result = query to array
        $user = $query->result();
        if (!isset($user) && count($user) != 1){
               return "Invalid username and password";
        }

        // unset password before return
        //$user

        $this->user = $user;
		return NULL;
    }


    public function getUser(){
        return $this->user;
    }


    public function encryptPassword($user_name, $password){
   	    return md5($user_name . $password);
    }

    public function decryptPassword($user_name, $password){
        return $password;
    }
}
