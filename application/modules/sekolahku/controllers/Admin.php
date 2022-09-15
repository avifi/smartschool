<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_links');
		$this->load->model('user_model');
		$this->load->helper('smartschool');
	}

	function view($page = 'index')
	{
		if (!$this->session->userdata('smartschool_login') && $this->session->userdata('user_type') != "super_user") {
			redirect(bantuan_url('login'));
		}

		$data = array(
			'no' => 1,
			'profile' => $this->user_model->profile(),
			'links' => $this->m_links->get() );
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/'.$page, $data);
		$this->load->view('admin/templates/footer');
	}

}