<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Sekolahku extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('auth');
	}

	function index()
	{
		$this->load->view('frontend/welcome');
	}
}
