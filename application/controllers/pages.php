<?php if (!defined('BASEPATH')) die();
class Pages extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}

	public function professor_search(){
		$this->load->helper(array('form'));
		$data['page_title']="Professor Search";
		$this->load->view('include/header');
		$this->load->view('professor_search');
		$this->load->view('include/footer');
	}

	public function professor(){
		$this->load->helper(array('form'));
		$data['page_title'] = "Professor";
		$this->load->view('include/header');
		$this->load->view('professor',$data);
		$this->load->view('include/footer');
	}


	public function course_search(){
		$this->load->helper(array('form'));
		$data['page_title']="Course Search";
		$this->load->view('include/header');
		$this->load->view('course_search');
		$this->load->view('include/footer');
	}

	public function course(){
		$this->load->helper(array('form'));
		$this->load->view('include/header');
		$this->load->view('course',$data);
		$this->load->view('include/footer');
	}


	public function calendar(){
		$this->load->view('include/header');
		$this->load->view('calendar');
		$this->load->view('include/footer');
	}

	public function registration()
	{
		$this->load->model('user_model');
		$this->load->helper(array('form'));
		$data['page_title'] = "registration";
		$this->load->view('include/header', $data);
		$this->load->view('registration', $data);
		$this->load->view('include/footer');
	}

	public function login(){
		$this->load->model('user_model');
		$this->load->helper(array('form'));
		$this->load->view('include/header');
		$this->load->view('login');
		$this->load->view('include/footer');
	}

	public function schedule(){
		$this->load->helper(array('form'));
		$data['page_title'] = "registration";
		$this->load->view('include/header');
		$this->load->view('schedule');
		$this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */