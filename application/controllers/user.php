<?php

class User extends CI_Controller {

	public function __construct() 
	{
		session_start();
		parent::__construct();
		$this->load->model('user_model','',TRUE);
		$newdata = array();
	}

	public function index()
	{
		$data['page_title'] = 'User - Profile';

		print_r($this->session->all_userdata());

		if (!$this->session->userdata('username')) {
			redirect('login/index');
		}
		else {
			$data['username'] = $this->session->userdata('username');
			print_r($this->session->all_userdata());
			$this->load->view('templates/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
		}

		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function add($course_code)
	{
		$key_name = 'schedule'.time();
		//print_r($this->session->all_userdata());

		$newdata = array($key_name => urldecode($course_code));
		
		$this->session->set_userdata($newdata);
		$data['players_followed'] = $this->session->userdata($key_name);
		//print_r($this->session->all_userdata());
		$data['username'] = $this->session->userdata('username');
		$this->load->view('include/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('include/footer');
	}
}