<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('client');
        $this->load->helper('admin');
        
    }

    function index() {
        $this->load->view('admin/login_form');
    }

}

?>