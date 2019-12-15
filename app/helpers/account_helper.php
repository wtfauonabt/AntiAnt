<?php
/**
 * Functions used to authenticate account access
 */
if (!function_exists('getAccountUser')) {
	function getAccountUser($user_name, $password)
	{
		$encryptPassword = encryptPassword($user_name, $password);
		$CI =& get_instance();
		$CI->load->database("backend");

		$CI->db->select('user_name');
		$CI->db->select('first_name');
		$CI->db->select('last_name');
		$CI->db->select('email_address');
		$CI->db->select('phone_number');
		$CI->db->select('group');
		$CI->db->from('account_user');
		$CI->db->where('user_name', $user_name);
		$CI->db->where('password', $encryptPassword);


		$user = $CI->db->get();
		if (
			empty($user) ||
			$user->num_rows() != 1
		){
			return array(
				"error" => "Invalid username and password"
			);
		}

		return $user->row_array();
	}
}

if (!function_exists('encryptPassword')) {
	function encryptPassword($user_name, $password)
	{
		return md5($user_name . $password);
	}
}
