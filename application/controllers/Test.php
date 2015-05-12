<?php

class Test extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function creat_sess()
    {
        $this->session->set_userdata([
                        'test' => 'session'
                    ]);
    }
    
    public function view_sess()
    {
        echo "<pre>";
        print_r($this->session->all_userdata());
    }
    
}