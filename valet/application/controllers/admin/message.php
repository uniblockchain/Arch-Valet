<?php

class Message extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
        $data['message'] = $this->db->order_by('id','desc')->get_where('tbl_notifications', array('msg'=>'1'))->result();
        $data['title'] = 'Message Box';
        $this->load->view('admin/message/list', $data);
    }

    function add_new() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['title'] = 'New Message';
        $data['unites'] = $this->db->get('tbl_users')->result();
        $this->load->view('admin/message/form', $data);
    }



    function save() {

        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean|');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add_new();
            return false;
        }

        $this->load->model('push');
        $title = $this->input->post('title');
        $msg = $this->input->post('message');

            $unite = array();
                
            $i=0;
            foreach($_POST['unite'] as $u){
                $usr = $this->db->get_where('tbl_users', array('unite_no'=>$u))->row();
                $unite[$i] = $usr; 
                $i++;
            }

        foreach($unite as $un){
                $car = $this->db->get_where('tbl_cars', array('unite_no'=>$un->unite_no))->row();
                $data['title'] = $this->input->post('title');
                $data['message'] = $this->input->post('message');
                $data['unite_no'] = $un->unite_no;
                $data['date'] = time();
                //$data['flag'] = '0';
                $data['status'] = '1';
                if($car){
                    $data['car_id'] = $car->id;
                }else{
                    $data['car_id'] = '0';
                }
                $data['msg'] = '1';

                $this->db->insert('tbl_notifications', $data);

                
                $this->push->android($title,$msg,$un->unite_no);
                $this->push->ios($title,$msg,$un->unite_no);
        }        
 


        $this->session->set_flashdata('message', 'Message sent successfully!');
        redirect(admin_url('message'));
    }


    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_notifications');
        $this->session->set_flashdata('message', 'Message deleted succesfully');
        redirect(admin_url('message'));
    }



}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>