<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Verification extends CI_Controller {

   function __construct()
   {
     session_start();
     parent::__construct();
     $this->load->model('user_model','',TRUE);
     $this->load->helper(array('form', 'url','html'));
    // $this->load->library(array('form_validation', 'session'))
   }

   function index()
   {
     //This method will have the credentials validation
     $this->load->library('form_validation');

     $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

     if($this->form_validation->run() == FALSE)
     {
       //Field validation failed.  User redirected to login page
       redirect('registration','refresh');
     }
     else
     {
       //Go to private area
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $result = $this->user_model->login($username, $password);
       if ($result)
       {
          $this->session->set_userdata('username', $username);
          $this->session->set_userdata('password', $password);
       }
       redirect('professor', 'refresh');
     }

   }

   function check_database($password) {
         //Field validation succeeded.  Validate against database
         $username = $this->input->post('username');
         //query the database
         $result = $this->login->login($username, $password);
         if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 //create the session
                 $sess_array = array('id_admin' => $row->id_admin,
                     'name_admin' => $row->name_admin);
                 //set session with value from database
                 $this->session->set_userdata('logged_in', $sess_array);
                 }
          return TRUE;
          } else {
              //if form validate false
              $this->form_validation->set_message('check_database', 'Invalid username or password');
              return FALSE;
          }
      }
}
