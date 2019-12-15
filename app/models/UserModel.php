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

	public function __construct()
	{
        parent::__construct();

        $this->table_name = "";

    }

    public function login($data)
	{
    	// check error
		$errorMessage = getUser($data["user_name"], $data["user_name"]);
    	return $errorMessage;
    }



    public function getUser()
	{
        return $this->user;
    }

}
