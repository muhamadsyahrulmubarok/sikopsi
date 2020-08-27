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
					'id_admin' => $admin['id_admin'],
					'lvl_admin' => $admin['lvl_admin']
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

	public function forgot()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$this->load->view('backend/v_forgot');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('admin', ['email_admin' => $email])->row_array();

			if ($user) {
				$token = base64_encode($email);

				$this->_sendEmail($email, $token);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Cek Email Anda</div>');
				redirect('auth/forgot');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar</div>');
				redirect('auth/forgot');
			}
		}
	}


	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('admin', ['email_admin' => $email])->row_array();

		if ($user) {
			$user_token = base64_decode($token);

			if ($user_token == $email) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email.</div>');
			redirect('auth');
		}
	}


	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('backend/v_reset');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('pswd_admin', $password);
			$this->db->where('email_admin', $email);
			$this->db->update('admin');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');
			redirect('auth');
		}
	}

	private function _sendEmail($email, $token)
	{
		$this->email->set_newline("\r\n");
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'mail.syahrul.codes',
			'smtp_user' => 'pmi@syahrul.codes',
			'smtp_pass' => 'adminpmi1',
			'smtp_port' => 465,
			'smtp_crypto' => 'ssl',
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('info@primkoppabriusp20-slawi.com', 'Info Primkoppabri USP.20 Slawi');
		$this->email->to($email);

		$this->email->subject('Reset Password');
		$this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Reset Password</a>');

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
}
