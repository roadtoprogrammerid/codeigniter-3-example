<?php

/**
 * @property User_model $new_user
 */
class Register extends CI_Controller
{

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url'); // need to use redirect
	}

	public function index() {
		$this->load->view('pages/register');
	}

	public function submit() {
		// TODO: validate if these input is correct later
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// TODO: display error message when email already exist in record
		$this->load->model('User_model', 'new_user');
		$this->new_user->insert_user($name, $email, $password);
		$user = $this->new_user->get_user_by_email($email);
		$this->db->close();

		$this->session->set_flashdata('user', $user); // TODO: instead using flash, better using session storage to pass user information
		redirect('user', 'refresh'); // TODO: redirect to login page when user not found
	}

}
