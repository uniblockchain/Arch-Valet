<?php

//require APPPATH.'/libraries/REST_Controller.php';

class Profile extends CI_Controller {

    public function __construct() {


        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }

        parent::__construct();
        //  $this->load->model('User_model');
    }
    
    function user_detail($id){
      $res = $this->db->get_where('tbl_users',array('unite_no'=>$id))->row();
      echo json_encode($res);
    }

 
    


}
