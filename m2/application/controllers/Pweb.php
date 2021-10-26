<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pweb extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
}
