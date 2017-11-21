<?php
//require APPPATH.'/libraries/REST_Controller.php';
class Register extends CI_Controller {

    public function __construct() {

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
    }


    function register_user(){
        $password = md5(config_item('salt') . $this->input->post('password'));
        $data['password'] = $password;
       $data['unite_no'] = $this->input->post('unit');
       $data['name'] = $this->input->post('fullname');
       $data['email'] = $this->input->post('email');
       $data['contact_no'] = $this->input->post('contact');
       $data['created_date'] = time();
       $this->db->insert('tbl_users',$data);
    }
    
    function update_user(){

       $unite_id = $this->input->post('unite_no');
       $data['name'] = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['contact_no'] = $this->input->post('contact');
       if(!empty($_POST['password'])){
        $password = md5(config_item('salt') . $this->input->post('password'));
        $data['password'] = $password;       
       }
       //debug($data);
       $this->db->where('unite_no',$unite_id);
       $this->db->update('tbl_users',$data);    
    }


}

?>



