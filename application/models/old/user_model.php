<?php

class User_model extends CI_Model {

	 function __construct() {
        parent::__construct();
        $this->load->database();
    }

	function login($username, $password)
	{
		$this->db->select('id, username, password, first_name, last_name, major, year');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1)
			return $query->result();
		else
			return false;
	}

	function register($username, $password)
	{
		$new_user = array (
			'username' => $username,
			'password' => $password
		);

		$cur_num_rows = $this->db->get();

		$this->db->insert('users', $new_user);

		$new_num_rows = $this->db->get();

		if ($cur_num_rows != $new_num_rows)
			return true;
		else
			return false;
	}
}