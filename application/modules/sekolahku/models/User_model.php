<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class User_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function profile()
	{
		$id = $this->session->userdata('user_id');
		$this->db->where('id', $id);
		return $this->db->get('users')->row(0);
	}
}