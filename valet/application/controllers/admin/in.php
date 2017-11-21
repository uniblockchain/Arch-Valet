<?php

class In extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();

        $this->db->order_by('status','ASC');
        $this->db->order_by('id','DESC');
        $this->db->order_by('request_time','DESC');
        $this->db->where('status','4');
        $query = $this->db->get('tbl_requests');
        $data['requests'] = $query->result();

        $data['title'] = 'Car In';
        $this->load->view('admin/in_out/in', $data);
    }



    function ready($id) {
        $data['status'] = '1';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Car is ready !');
        

        
        
        
        redirect(admin_url('in'));
    }

    function cancel($id) {
        $data['status'] = '2';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Request Canceled !');
        redirect(admin_url('in'));
    }



}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>