<?php class User extends CI_Controller {
  public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
    }



    function register(){
    	debug($_POST);
    	exit;
    }

}