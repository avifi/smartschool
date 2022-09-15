<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('smartschool');
		$this->load->library('session');
		$this->load->library('auth');
		if ($this->auth->hasLogin()) redirect('dashboard', 'refresh');
		$this->load->model('login_model');
		$this->load->model('m_users');
	}

	public function index()
	{
		$vars['ip_banned'] = $this->auth->ip_banned(get_ip_address());
		$this->load->view('login', $vars);
	}

	public function verify() {
		if ($this->input->is_ajax_request()) {
			if ($this->validation()) {
				$user_name = $this->input->post('user_name', TRUE);
				$user_password = $this->input->post('user_password', TRUE);
				$ip_address = get_ip_address();
				$logged_in = $this->auth->logged_in($user_name, $user_password, $ip_address) ? 'success' : 'error';
				$vars['status'] = $logged_in;
				$vars['message'] = $logged_in == 'success' ? 'logged_in' : 'not_logged_in';
				$vars['ip_banned'] = $this->auth->ip_banned($ip_address);
			} else {
				$vars['status'] = 'error';
				$vars['message'] = validation_errors();
				$vars['ip_banned'] = FALSE;
			}
			$this->output
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($vars, JSON_HEX_APOS | JSON_HEX_QUOT))
				->_display();
			echo json_encode($vars);
			exit;
		}
	}

	function cek_login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$user_id = $this->login_model->login($user);

		if($user_id){
			if ($user_id->is_deleted == 'true') {
				$this->session->set_flashdata('login_failed', 'Access denied');

				redirect(bantuan_url('login'));
			}
			else {
				$task = password_verify($pass, $user_id->user_password);
				if ($task) {
					$user_data = array(
						'user_id' => $user_id->id,
						'user_type' => $user_id->user_type,
						'smartschool_login' => true
					);

					$this->session->set_userdata($user_data);

					if ($user_id->user_type == "super_user") {
						redirect(bantuan_url('admin'));
					}
				}
				else {
				 	$this->session->set_flashdata('login_failed', 'Login is invalid');

				 	redirect(bantuan_url('login'));
				}
			}
		} else {
			
			$this->session->set_flashdata('login_failed', 'Login is invalid');

			redirect(bantuan_url('login'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_type');
		$this->session->unset_userdata('smartschool_login');
		$this->session->set_flashdata('user_loggedout', 'You are now logged out');

		redirect(bantuan_url('login'));
	}

	/**
	 * Validation Form
	 * @return Boolean
	 */
	private function validation() {
		$this->load->library('form_validation');
		$val = $this->form_validation;
		$val->set_rules('user_name', 'Nama Akun', 'trim|required');
		$val->set_rules('user_password', 'Kata Sandi', 'trim|required');
		$val->set_error_delimiters('<div>&sdot; ', '</div>');
		return $val->run();
	}
}
