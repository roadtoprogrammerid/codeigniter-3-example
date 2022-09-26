<?php

/**
 * @property User_model $user
 */
class Login extends CI_Controller
{

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url'); // need to use redirect
	}

	public function index() {
		$this->load->view('pages/login');
	}

	public function submit() {
		// TODO: validate if these input is correct later
		$email = $this->input->post('txt_email');
		$password = $this->input->post('txt_password');

		// TODO: display error message when user not found later
		$this->load->model('User_model', 'user');
		$user = $this->user->get_user_by_email_and_password($email, $password);
		$this->db->close();

		$this->session->set_flashdata('user', $user);  // TODO: instead using flash, better using session storage to pass user information
		redirect('user', 'refresh'); // TODO: redirect to login page when user not found
	}
}
