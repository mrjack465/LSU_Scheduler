<?php

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
	}

	public function index()
	{
		$data['courses'] = $this->course_model->get_course_by_name('Template');
		$data['page_title'] = "Course";
		$this->load->view('include/header', $data);
		$this->load->view('course', $data);
		$this->load->view('include/footer');

	}

	public function view($slug)
	{
		$this->load->helper(array('form'));

		$data['page_title'] = "Course";

		if (strpos(urldecode($slug),'-') !== false)
			{
				$data['courses'] = $this->course_model->get_course_by_code(urldecode($slug));
				$this->load->view('include/header', $data);
				$this->load->view('course', $data);
				$this->load->view('include/footer');
			}

		else 
			{
				$data['courses'] = $this->course_model->get_course_by_name(urldecode($slug));
				$this->load->view('include/header', $data);
				$this->load->view('course', $data);
				$this->load->view('include/footer');
				$data['page_title'] = "Course";
			}
	}
}