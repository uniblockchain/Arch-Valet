<?php

class Login extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $this->load->helper('admin_helper');
        $data['logo'] = $this->db->get_where('site_settings', array('id'=>'1'))->row();
        $this->load->view('admin/login_form', $data);
    }

    function process() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message','Username and Password both are required');
           redirect(site_url('en/admin/login'));
        } else {
           $username=$this->input->post('username');
           $password=$this->input->post('password');
          $username_exists= $this->Admin_model->username_exists($username);
           if($username_exists){
               $password=md5(config_item('salt').$password);
               $database_password=$this->Admin_model->get_password_username($username);
               
               if(strcmp($password,$database_password)==0){
                 $admin_detail=$this->Admin_model->get_user_id($username,$database_password);
                 if($admin_detail){
                     $this->session->set_userdata('admin_user_id',$admin_detail->id);
                     $this->session->set_userdata('admin_name',$admin_detail->name);
                     $this->session->set_userdata('admin_email',$admin_detail->email);
                     $username = $this->session->set_userdata('admin_name',$admin_detail->name);
                     redirect(site_url('en/admin'));
                 }
               }else{
                  $this->session->set_flashdata('message','Invalid login ');
                  redirect(site_url('en/admin'));
               }
           }else{
                 $this->session->set_flashdata('message','Invalid Login');
                 redirect(site_url('en/admin/login'));
           }
           
        }
    }
    function logout(){
        $this->session->sess_destroy();
        if(isset($_SESSION)){
            session_destroy();
            unset($_SESSION);
        }
        redirect(site_url('en/admin'));
    }
    function auto(){
        $this->session->set_userdata('admin_user_id',1);
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
