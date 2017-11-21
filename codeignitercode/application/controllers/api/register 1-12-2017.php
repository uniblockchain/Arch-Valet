<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');


class Register extends CI_Controller {

    public function __construct() {


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

 function registerToken(){
        //echo "coool"; exit;

        $token = $this->input->get('token');
        $user_id = $this->input->get('user_id');
        $platform = '1';

     //   $data['uuid'] = '';
        $data['token'] = $token;
        $data['platform'] = $platform;
        $data['user_id'] = $user_id;       // $data['created'] = time();


        //echo json_encode($data);exit();

        $result = $this->db->where('token',$token)->get('tbl_device_token');

        if($result->num_rows() == 0){
          $this->db->insert('tbl_device_token',$data);
            // $this->response('success','',);
        }else{
            $this->db->where('token',$token);
            $this->db->update('tbl_device_token',$data);
            // $this->response('success','',);
        }

        // $this->response('success','',array());
        

    }


 function unregisterToken(){
        

        $token = $this->input->get('token');
        $user_id = $this->input->get('user_id');
        $platform = '1';


        $data['token'] = $token;
        $data['platform'] = $platform;
        $data['user_id'] = $user_id;       


        $result = $this->db->where('token',$token)->get('tbl_device_token');

        $this->db->where('user_id',$user_id);
        $this->db->delete('tbl_device_token');

/*        if($result->num_rows() == 0){
          $this->db->insert('tbl_device_token',$data);
           
        }else{
            $this->db->where('token',$token);
            $this->db->update('tbl_device_token',$data);
           
        }*/
 

    }




    public function registerToken_admin(){
        //echo "coool"; exit;

        $token = $this->input->get('token');
        $user_id = $this->input->get('user_id');
        $platform = '0';

     //   $data['uuid'] = '';
        $data['token'] = $token;
        $data['platform'] = $platform;
        $data['user_id'] = $user_id;       // $data['created'] = time();


        //echo json_encode($data);exit();

        $result = $this->db->where('token',$token)->get('tbl_device_token');

        if($result->num_rows() == 0){
          $this->db->insert('tbl_device_token',$data);
            // $this->response('success','',);
        }else{
            $this->db->where('token',$token);
            $this->db->update('tbl_device_token',$data);
            // $this->response('success','',);
        }

        // $this->response('success','',array());
    }
    
    
    
    
    
    
    


public function unregisterToken_admin(){

        $token = $this->input->get('token');
        $user_id = $this->input->get('user_id');
        $platform = '1';


        $data['token'] = $token;
        $data['platform'] = $platform;
        $data['user_id'] = $user_id;       


        $result = $this->db->where('token',$token)->get('tbl_device_token');

        $this->db->where('user_id',$user_id);
        $this->db->delete('tbl_device_token');

/*        if($result->num_rows() == 0){
          $this->db->insert('tbl_device_token',$data);
           
        }else{
            $this->db->where('token',$token);
            $this->db->update('tbl_device_token',$data);
           
        }*/
    }






}

?>