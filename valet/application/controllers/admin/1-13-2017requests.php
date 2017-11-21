<?php

class Requests extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();

        $this->db->order_by('id','DESC');
        $this->db->order_by('request_time','DESC');
        $this->db->where('status','1');
        $query = $this->db->get('tbl_requests');
        $data['requests'] = $query->result();

        $data['title'] = 'Car Requests';
        
         $this->load->view('admin/request/list', $data);
    }

    function refresh(){
      $all = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
      echo count($all);
    }


    function refresh_user(){
        $all = $this->db->get('tbl_users')->result();
        echo "Total : ".count($all);
    }

    function refresh_car(){
        $all = $this->db->get_where('tbl_cars', array('visitor'=>'0'))->result();
        echo "Total : ".count($all);
    }


    function refresh_visitor_car(){
        $all = $this->db->get_where('tbl_cars', array('visitor'=>'1'))->result();
        echo "Total : ".count($all);
    }


    function refresh_car_out(){
        $this->db->where('status','2');
        $query = $this->db->get('tbl_requests');
        echo "Total : ".count($query->result());

    }


    function refresh_requests(){
      $all = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
      echo "Total : ".count($all);
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
        $car['requested_date'] = date('m-d-Y');
        $car['requested_timestamp'] = time();
        $car['request_id'] = $id;

        $this->db->insert('tbl_request_report',$car); 
        
        
        $cars = $this->db->get_where('tbl_cars',array('id'=>$car['car_id']))->row();
        $noti['unite_no'] = $cars->unite_no;
        $noti['car_id'] = $cars->id;
        $noti['status'] = '1';
        $noti['message'] = 'The car you requested is ready!';
        $noti['title'] = 'Car is ready';
        $noti['date'] = time();
        $this->db->insert('tbl_notifications',$noti);
        

        $this->load->model('push');

        $this->push->android('Car ready','Your Car is ready',$cars->unite_no);
        $this->push->android_admin('Car request','You have a new car request');
        //$this->push->ios('Car ready','Your car is ready',$cars->unite_no);
        
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
        $car['requested_date'] = date('m-d-Y');
        $car['requested_timestamp'] = time();
        $car['request_id'] = $id;
        $this->db->insert('tbl_request_report',$car);         
        
         $cars = $this->db->get_where('tbl_cars',array('id'=>$car['car_id']))->row();
        $noti['unite_no'] = $cars->unite_no;
        $noti['car_id'] = $cars->id;
        $noti['message'] = 'The car you requestd is canceled!';
        $noti['title'] = 'Your request is canceled';
        $noti['date'] = time();
        $this->db->insert('tbl_notifications',$noti);        
        
        
        redirect(admin_url('requests'));
    }














}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>