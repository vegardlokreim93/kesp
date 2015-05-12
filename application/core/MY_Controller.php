<?php

class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    
        //Load the flexi_auth library, important to creat stdClass BEFORE the load
        $this->auth = new stdClass;
        $this->load->library('flexi_auth');
        
        //Check if the user is logged in, if not redirect to auth
        //If the user asks for /auth, it won` redirect (infinity loop fix)
        if(!$this->flexi_auth->is_logged_in() && $this->uri->segment(1) != 'auth')
        {
            redirect('auth');
            die;
        }
        $this->_log_activity();
    }
    
    
    /*
     * This function is for logging the users. 
     * Everytime MY_Controller loads this runs
     * Uses uri_string, user_id if exsists, if not it uses 0 (public) and session_id    
     */
    private function _log_activity(){
        //Get the uri (eks home/front)
        $log_page = $this->uri->uri_string();
        //Get the user_id, if not it uses 0
        $user_id = ($this->flexi_auth->get_user_id() ? $this->flexi_auth->get_user_id() : '0');
        //Gets the session id
        $session_id = session_id();
        
        //Load the model
        $this->load->model('log_model');
        
        //Check if page exsists, if not FALSE will be returned. If true, asign to page_fk variable
        if($page_fk = $this->log_model->check_if_page_exsists($log_page)){
            //page eksists
            $this->log_model->log_user_activity($user_id, $page_fk, $session_id);
        }else{
            //Page does not exsist, creat page then log data
            $page_fk = $this->log_model->insert_new_page($log_page);
            $this->log_model->log_user_activity($user_id, $page_fk, $session_id);
        }
    }
    
}