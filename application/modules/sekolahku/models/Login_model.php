<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function login($user)
	{

		$this->db->where('user_name', $user);
		$result = $this->db->get('users');

		if($result->num_rows() == 1){
			return $result->row(0);
		} else {
			return false;
		}
	}
}