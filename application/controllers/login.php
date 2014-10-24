<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function index() {
        $this->load->helper(array('form','html'));
        $this->load->view('login'); //load view for login
    }
}