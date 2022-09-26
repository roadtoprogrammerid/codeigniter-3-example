<?php

class User_model extends CI_Model
{
	public $name;
	public $email;
	public $password;
	public $created_date;

	public function insert_user($name, $email, $password) {
		$this->db->insert(
			'user',
			array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'created_date' => date('Y-m-d H:i:s'))
		);
	}

	/**
	 * @param $email
	 * @return User_model
	 */
	public function get_user_by_email($email) {
		$result = $this->db->get_where('user', array('email' => $email));
		return $result->row();
	}

	/**
	 * @param $email
	 * @param $password
	 * @return User_model
	 */
	public function get_user_by_email_and_password($email, $password) {
		$result = $this->db->get_where('user', array('email' => $email, 'password' => $password));
		return $result->row();
	}
}
