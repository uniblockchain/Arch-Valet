<?php

class Visitors extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result(); 
        $data['cars'] = $this->db->get_where('tbl_cars', array('visitor'=>'1'))->result();
        $data['title'] = 'Vistors Car Information';
        $this->load->view('admin/visitors/list', $data);
    }

    function add_new() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['title'] = 'Add Visitor Car';
        $data['unites'] = $this->db->get('tbl_users')->result();
        $this->load->view('admin/visitors/form', $data);
    }

    function edit($id=FALSE) {
        if (!$id) {
            redirect(admin_url('visitors'));
        }
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['unites'] = $this->db->get('tbl_users')->result();
        $data['car'] = $this->db->get_where('tbl_cars', array('id' => $id))->row();
        $data['title'] = 'Edit Visitor';
        $this->load->view('admin/visitors/form', $data);
    }

    function save() {
//debug($_POST); exit;

        $this->form_validation->set_rules('unite_no', 'Unite No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('made', 'Car Made', 'trim|required|xss_clean|');
        $this->form_validation->set_rules('model', 'Model', 'trim|required|xss_clean');
        $this->form_validation->set_rules('color', 'Color', 'trim|required|xss_clean');
        $this->form_validation->set_rules('plate_number', 'Plate No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('parking_spot', 'Parking Spot', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add_new();
            return false;
        }

        $data['unite_no'] = $this->input->post('unite_no');
        $data['made'] = $this->input->post('made');
        $data['model'] = $this->input->post('model');
        $data['color'] = $this->input->post('color');
        $data['plate_number'] = $this->input->post('plate_number');
        $data['parking_spot'] = $this->input->post('parking_spot');
        $data['visitor'] = '1';

        $this->db->insert('tbl_cars', $data);

        $this->session->set_flashdata('message', 'Visitor Car added successfully!');
        redirect(admin_url('visitors'));
    }

    function update($id) {
        $this->form_validation->set_rules('unite_no', 'Unite No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('made', 'Car Made', 'trim|required|xss_clean|');
        $this->form_validation->set_rules('model', 'Model', 'trim|required|xss_clean');
        $this->form_validation->set_rules('color', 'Color', 'trim|required|xss_clean');
        $this->form_validation->set_rules('plate_number', 'Plate No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('parking_spot', 'Parking Spot', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
            return false;
        }

        $data['unite_no'] = $this->input->post('unite_no');
        $data['made'] = $this->input->post('made');
        $data['model'] = $this->input->post('model');
        $data['color'] = $this->input->post('color');
        $data['plate_number'] = $this->input->post('plate_number');
        $data['parking_spot'] = $this->input->post('parking_spot');
        $data['visitor'] = '1';
        
       
        $this->db->where('id', $id);
        $this->db->update('tbl_cars', $data);


        $this->session->set_flashdata('message', 'Visitor car updated successfully!');
        redirect(admin_url('visitors'));
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_cars');
        $this->session->set_flashdata('message', 'Visitor car deleted succesfully');
        redirect(admin_url('visitors'));
    }


}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>