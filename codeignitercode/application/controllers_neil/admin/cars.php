<?php

class Cars extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
        $data['cars'] = $this->db->get_where('tbl_cars', array('visitor'=>'0'))->result();
        $data['title'] = 'Cars Information';
        $this->load->view('admin/cars/list', $data);
    }

    function add_new() {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['title'] = 'Add Car';
        $data['unites'] = $this->db->get('tbl_users')->result();
        $this->load->view('admin/cars/form', $data);
    }

    function edit($id=FALSE) {
        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        if (!$id) {
            redirect(admin_url('cars'));
        }
        $data['unites'] = $this->db->get('tbl_users')->result();
        $data['car'] = $this->db->get_where('tbl_cars', array('id' => $id))->row();
        $data['title'] = 'Edit Car';
        $this->load->view('admin/cars/form', $data);
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
        
        $this->db->insert('tbl_cars', $data);

        $this->session->set_flashdata('message', 'Car added successfully!');
        redirect(admin_url('cars'));
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
        
       
        $this->db->where('id', $id);
        $this->db->update('tbl_cars', $data);


        $this->session->set_flashdata('message', 'Car updated successfully!');
        redirect(admin_url('cars'));
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_cars');
        $this->session->set_flashdata('message', 'Car deleted succesfully');
        redirect(admin_url('cars'));
    }


}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>