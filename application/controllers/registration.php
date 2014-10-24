<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->helper(array('form'));
		$data['page_title'] = "registration";
		$this->load->view('include/header', $data);
		$this->load->view('registration', $data);
		$this->load->view('include/footer');
	}
}
