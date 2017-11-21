<?php
class Admin_home extends Admin_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    function index(){
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
    	$user_id = $this->session->userdata('admin_user_id');
    	$data['profile'] = $this->db->select('image')->from('admin')->where('id',$user_id)->get()->row();
    	$data['title'] = 'Dashboard';
    	$data['main'] = 'dashboard';
        $this->load->view('admin/index', $data);
    }
   
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>