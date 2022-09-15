<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Links extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_links');
	}

	function action()
	{
		// echo "hello kawan semua";
		if ($this->input->post('data_action')) {
			$data_action = $this->input->post('data_action');

			if ($data_action == 'insert') {
				$data = array(
					'link_title' => $this->input->post('link_title'),
					'link_url' => $this->input->post('link_url'),
					'link_target' => $this->input->post('link_target'),
					'created_by' => 1, );

				$this->m_links->insert($data);

				$this->session->set_flashdata('success', 'Tautan baru berhasil ditambahkan');

				redirect('admin/links');
			}
			if ($data_action == 'fetch_single') {
				$data = $this->m_links->get_single($this->input->post('link_id'));
				
		  		echo json_encode($data);
			}
			if ($data_action == 'edit') {
				echo "mengedit";
			}
		}
	}
}