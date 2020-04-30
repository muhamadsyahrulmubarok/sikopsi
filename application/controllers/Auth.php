<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model(array('M_admin'));
	}

	public function index()
	{
		if ($this->session->userdata('username_admin')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('username_admin', 'Username', 'trim|required');
		$this->form_validation->set_rules('password_admin', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('backend/v_login');
		} else {
			// validasinya success
			$this->_proseslogin();
		}
	}

	private function _proseslogin()
	{
		$username = $this->input->post('username_admin');
		$password = $this->input->post('password_admin');

		$admin = $this->db->get_where('admin', ['username_admin' => $username])->row_array();

		// jika adminnya ada
		if ($admin) {
			// cek password
			if (password_verify($password, $admin['pswd_admin'])) {
				$data = [
					'username_admin' => $admin['username_admin'],
					'id_admin' => $admin['id_admin']
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
			redirect('auth');
		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();

		redirect('auth', 'refresh');
	}
}
