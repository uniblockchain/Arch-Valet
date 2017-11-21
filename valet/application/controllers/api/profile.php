<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
class Profile extends CI_Controller {

    public function __construct() {

        parent::__construct();
        //  $this->load->model('User_model');
    }
    
    function user_detail($id){
      $res = $this->db->get_where('tbl_users',array('unite_no'=>$id))->row();
      echo json_encode($res);
    }

 
    


}
