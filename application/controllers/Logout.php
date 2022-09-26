<?php

class Logout extends CI_Controller
{
	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url'); // need to use redirect
	}

	public function index() {
		// TODO: delete data from session storage, if already implemented

		redirect('login', 'refresh');
	}

}
