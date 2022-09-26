<?php

class User_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index() {
		$user = $this->session->flashdata('user'); // TODO: get user information from session instead from flash data, if other controller already implemented it

		if ($user == null) {
			redirect('login', 'refresh');
		}

		$data['user'] = $user;
		$this->load->view('pages/user/user', $data);
	}
}
