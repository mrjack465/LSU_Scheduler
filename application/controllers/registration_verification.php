<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration_Verification extends CI_Controller {
  

   function __construct()
   {
     parent::__construct();
     $this->load->model('user_model','',TRUE);
   }

   function index(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
      if($this->form_validation->run() == FALSE){
       //Field validation failed.  User redirected to login page
       $this->load->view('registration');
       $this->form_validation->set_message('check_database', 'User name already in use');
     }
     else
     {
      if (isset($_POST['username'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $this->user_model->register($username, $password);
          redirect('user/index');
    } else {
      $this->load->view('registation');
      }
    }
  }
}

?>