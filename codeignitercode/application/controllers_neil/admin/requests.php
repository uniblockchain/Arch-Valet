<?php

class Requests extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        /*echo $now_date = date("F j, Y, g:i a"); echo "<br/>";
        echo $now_time = date("F j, Y"); echo "<br/>";
        echo $current_timestamp = time();
        exit;*/
        //$data['requests'] = $this->db->order_by('status','ASC','id','DESC','request_time','DESC')->get('tbl_requests')->result();
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();

        $this->db->order_by('status','ASC');
        $this->db->order_by('id','DESC');
        $this->db->order_by('request_time','DESC');

        $query = $this->db->get('tbl_requests');
        $data['requests'] = $query->result();

        $data['title'] = 'Car Requests';
        $this->load->view('admin/request/list', $data);
    }

    function refresh(){
      $all = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
      echo count($all);
    }


 


    function ready($id) {
        $data['status'] = '2';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Car is ready !');
        
        $detail = $this->db->get_where('tbl_requests', array('id'=>$id))->row();
        
        $car['car_id'] = $detail->car_id;
        $car['status'] = '2';
        $car['requested_date'] = time();
        $car['request_id'] = $id;
        $this->db->insert('tbl_request_report',$car);        
        
        redirect(admin_url('requests'));
    }

    function cancel($id) {
        $data['status'] = '3';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Car is ready !');
        
        $detail = $this->db->get_where('tbl_requests', array('id'=>$id))->row();
        
        $car['car_id'] = $detail->car_id;
        $car['status'] = '3';
        $car['requested_date'] = time();
        $car['request_id'] = $id;
        $this->db->insert('tbl_request_report',$car);         
        
        
        redirect(admin_url('requests'));
    }



}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>