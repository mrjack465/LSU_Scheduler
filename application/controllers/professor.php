<?php

class Professor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('professor_model');
	}

	public function index()
	{
		$data['professors'] = $this->professor_model->get_professor_by_name('Template');
		$data['page_title'] = "Professor";
		$this->load->view('templates/header', $data);
		$this->load->view('professor', $data);
		$this->load->view('templates/footer');

	}

	public function view($slug)
	{
		$this->load->helper(array('form'));

		$data['page_title'] = "Professor";

		if (strlen(urldecode($slug)) > 2)
			{
				$data['professors'] = $this->professor_model->get_professor_by_name(urldecode($slug));
				$this->load->view('include/header', $data);
				$this->load->view('professor', $data);
				$this->load->view('include/footer');
				$data['page_title'] = "Professor";
			}

		else 
			{
				$data['professers'] = $this->professor_model->get_professor_by_class(urldecode($slug));
				$this->load->view('templates/header', $data);
				$this->load->view('list', $data);
				$this->load->view('templates/footer');
			}
	}
}