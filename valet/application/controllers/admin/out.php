<?php

class Out extends Admin_Controller {

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
        $this->db->where('status','2');
        $query = $this->db->get('tbl_requests');
        $data['requests'] = $query->result();

        $data['title'] = 'Car Requests';
        $this->load->view('admin/in_out/out', $data);
    }


    function in($id) {
        $data['status'] = '4';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Car is ready !');
        
        $detail = $this->db->get_where('tbl_requests', array('id'=>$id))->row();
        
        $car['car_id'] = $detail->car_id;
        $car['status'] = '4';
        $car['requested_date'] = date('m-d-Y');
        $car['requested_timestamp'] = time();
        $car['request_id'] = $id;
        $this->db->insert('tbl_request_report',$car);
        
        
        
        $cars = $this->db->get_where('tbl_cars',array('id'=>$car['car_id']))->row();
        $noti['unite_no'] = $cars->unite_no;
        $noti['car_id'] = $cars->id;
        $noti['message'] = 'The car is in!';
        $noti['title'] = 'Car is In';
        $noti['date'] = time();
        $this->db->insert('tbl_notifications',$noti);
        
        redirect(admin_url('out'));
    }

    function cancel($id) {
        $data['status'] = '3';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Request canceled !');
        redirect(admin_url('out'));
    }



}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>