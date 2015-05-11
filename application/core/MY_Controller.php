<?php

class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    
        
        $this->auth = new stdClass;
        $this->load->library('flexi_auth');
        
        if(!$this->flexi_auth->is_logged_in())
        {
            redirect('auth');
        }
    }
    
    
}