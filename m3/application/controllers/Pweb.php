<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pweb extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('login') == '1') {
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('pweb/login', 'refresh');
		}
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

		if (isset($_POST['login'])) {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata('login', '1');
				$this->session->set_userdata('username', $user['username']);
				redirect('', 'refresh');
			} else {
				$this->session->set_flashdata('salah_login', '1');
				redirect('pweb/login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('salah_login', '1');
			redirect('pweb/login', 'refresh');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('pweb/login', 'refresh');
	}

	public function edit()
	{
		if ($this->session->userdata('login') == '1') {
			$this->load->view('header');
			$this->load->view('edit');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('pweb/login', 'refresh');
		}
	}

	public function tambah()
	{
		if ($this->session->userdata('login') == '1') {
			$this->load->view('header');
			$this->load->view('tambah');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('belum_login', '1');
			redirect('pweb/login', 'refresh');
		}
	}
}