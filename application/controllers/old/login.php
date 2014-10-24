<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','',TRUE);
		$this->load->helper('url');
        $this->load->library(array('form_validation','session'));
	}

	function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['name'];
            $data['id'] = $session_data['id'];
            $this->load->view('include/header', $data);
			$this->load->view('frontpage', $data);
			$this->load->view('include/footer');
        } else {
        //If no session, redirect to login page
             $this->load->view('include/header', $data);
			 $this->load->view('login', $data);
			 $this->load->view('include/footer');
        }

	function registration(){
		$this->load->helper(array('form'));
		$data['page_title'] = "registration";
		$this->load->view('include/header', $data);
		$this->load->view('registration', $data);
		$this->load->view('include/footer');
	}
}}
