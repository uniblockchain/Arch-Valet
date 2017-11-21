<?php
header('Access-Control-Allow-Origin: *');
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }




        function check_login(){


            $unite_no = $_POST['unite_no'];
            $pass = $_POST['password'];




            $username_exists = $this->User_model->unite_no_exists($unite_no);
            if ($username_exists) {
              
                $password = md5(config_item('salt') . $pass);
                $database_password = $this->User_model->get_password_unite_no($unite_no);
                if (strcmp($password, $database_password) == 0) {
                    $user_detail = $this->db->get_where('tbl_users', array('unite_no'=>$unite_no))->row();
                    //echo json_encode($user_detail);
                    if($user_detail){
                        $data['success'] = true;
                        $data['status'] = $user_detail->status;

                       //$detail = array('success','true'); 
                       echo json_encode($data);
                    }else{
                        $data['success'] = false;
                        $data['status'] = '0';
                        echo json_encode($data);
                    }
                }else{
                    $data['success'] = false;
                    $data['status'] = '0';
                    echo json_encode($data);
                }
                
            }else{
                    $data['success'] = false;
                    $data['status'] = '0';
                    echo json_encode($data);
            }

        }
        
          function check_email_unit(){
            $email = $this->input->post('email');
            $unit_no = $this->input->post('unite');
            
            $email = $this->db->get_where('tbl_users',array('email'=>$email))->row();
            if(!empty($email)){
                $data['email_status'] = true;
            }else{
                $data['email_status'] = false;
            }
            
            $unit = $this->db->get_where('tbl_users',array('unite_no'=>$unit_no))->row();
            if(!empty($unit)){
                $data['unit_status'] = true;
            }else{
                $data['unit_status'] = false;
            }
           echo json_encode($data);
        }




        function check_login_admin(){
            
             $unite_no = $_POST['unite_no'];
            $pass = $_POST['password'];

/*            $unite_no = '182';
            $pass = 'roshan';*/

            $username_exists = $this->User_model->admin_unite_no_exists($unite_no);
            if ($username_exists) {
                $password = md5(config_item('salt') . $pass);
                $database_password = $this->User_model->admin_get_password_unite_no($unite_no);
                if (strcmp($password, $database_password) == 0) {
                    $user_detail = $this->db->get_where('admin', array('username'=>$unite_no))->row();
                    //echo json_encode($user_detail);
                    if($user_detail){
                        $data['success'] = true;
                       //$detail = array('success','true'); 
                       echo json_encode($data);
                    }else{
                        $data['success'] = false;
                        echo json_encode($data);
                    }
                }else{
                    $data['success'] = false;
                    echo json_encode($data);
                }
                
            }else{
                    $data['success'] = false;
                    echo json_encode($data);
            }   
            
        }


}

?>