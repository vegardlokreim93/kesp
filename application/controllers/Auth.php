<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
        
    
        public function __construct() {
            parent::__construct();
        
            $this->load->helper('form');
            $this->load->library('form_validation');
        }
        
	public function index()
	{
            $data['errors'] = $this->flexi_auth->error_messages();
            $this->load->view('com/header');
            $this->load->view('auth/auth_index', $data);
            $this->load->view('com/footer');
    }
        
        public function login()
        {
            //If not the form is submittet by the button, redirect to auth
            if(!$this->input->post('submit'))
            {
                redirect('auth');
            }
            
            //Validation settings for un and pw
            $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
           
            //Run validation
            if ($this->form_validation->run() == FALSE)
            {
                //Something went wrong, reload the view. Now with an validation_error message, wich will display to user
                $this->index();
            }
            else
            {
                //Everything is OK
                //Continue with flexi auth
                $un = $this->input->post('username');
                $pw = $this->input->post('password');
                if(!$this->flexi_auth->login($un, $pw))
                {
                    //Something went wrong in flexi auth, wrong username pasword etc
                    $this->index();
                }else{
                    redirect('Home');
                }
            }
            
        }
}
