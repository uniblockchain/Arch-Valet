<?php

header('Access-Control-Allow-Origin: *');

class Building extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->library('form_validation');
    }
   
    function fetch_buildings() {
        $data = $this->db->get_where('admin',array('role !='=>'superadmin'))->result();
        echo json_encode($data);
    }
}