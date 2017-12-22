<?php

class Visitors extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result(); 
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
		$data['cars'] = $this->db->select('*, tbl_cars.id as car_id')->from('tbl_cars')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('visitor'=>'1','tbl_users.created_by'=> $this->session->userdata('admin_user_id')))->order_by('tbl_cars.id','desc')->get()->result();
		
		// $data['cars'] = $this->db->order_by('id','desc')->get_where('tbl_cars', array('visitor'=>'1'))->result();
        $data['title'] = 'Vistors Car Information';
        $this->load->view('admin/visitors/list', $data);
    }

    function add_new() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        $data['title'] = 'Add Visitor Car';
        $data['unites'] = $this->db->get_where('tbl_users',array('created_by'=>$this->session->userdata('admin_user_id')))->result();
        $this->load->view('admin/visitors/form', $data);
    }

    function edit($id=FALSE) {
        if (!$id) {
            redirect(admin_url('visitors'));
        }
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        $data['unites'] = $this->db->get_where('tbl_users',array('created_by'=>$this->session->userdata('admin_user_id')))->result();
        $data['car'] = $this->db->get_where('tbl_cars', array('id' => $id))->row();
        $data['car']->add_edit = "edit";
        $data['title'] = 'Edit Visitor';
        $this->load->view('admin/visitors/form', $data);
    }

    function save() {
		//debug($_POST); exit;
        $this->form_validation->set_rules('ticket_no', 'Ticket No', 'required|trim');
        $this->form_validation->set_rules('unite_no', 'Unit No', 'required|trim');
        $this->form_validation->set_rules('type', 'Vehicle Type', 'required|trim');
        $this->form_validation->set_rules('made', 'Make', 'required|trim');
        $this->form_validation->set_rules('model', 'Model', 'required|trim');
        $this->form_validation->set_rules('color', 'Color', 'required|trim');
        $this->form_validation->set_rules('plate_number', 'Plate No', 'required|trim');
        if ($this->form_validation->run() != FALSE) {
            $data['unite_no'] = $this->input->post('unite_no');
    		$data['type'] = $this->input->post('type');
            $data['made'] = $this->input->post('made');
            $data['model'] = $this->input->post('model');
            $data['color'] = $this->input->post('color');
            $data['plate_number'] = $this->input->post('plate_number');
            $data['parking_spot'] = $this->input->post('parking_spot');
            $data['visitor'] = '1';
            $data['note'] = $this->input->post('note');
            $data['ticket_no'] = $this->input->post('ticket_no');
            $data['created_date'] = time();

            $this->db->insert('tbl_cars', $data);

            $this->session->set_flashdata('message', 'Visitor Car added successfully!');
            redirect(admin_url('visitors'));
        } else {
            @$data['car']->add_edit = "add";
           $data['car']->unite_no = $this->input->post('unite_no');
           $data['car']->type = $this->input->post('type');
           $data['car']->made = $this->input->post('made');
           $data['car']->model = $this->input->post('model');
           $data['car']->color = $this->input->post('color');
           $data['car']->plate_number = $this->input->post('plate_number');
           $data['car']->parking_spot = $this->input->post('parking_spot');
           $data['car']->note = $this->input->post('note');
            $data['car']->ticket_no = $this->input->post('ticket_no');

            $this->session->set_flashdata('message', 'Please fill all required fields.');
            $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
            $data['unites'] = $this->db->get_where('tbl_users',array('created_by'=>$this->session->userdata('admin_user_id')))->result();
        
            $data['title'] = 'Edit Visitor Car';
            
            $this->load->view('admin/visitors/form', $data);
        }    
    }

    function update($id) {
        $this->form_validation->set_rules('ticket_no', 'Ticket No', 'required|trim');
        $this->form_validation->set_rules('unite_no', 'Unit No', 'required|trim');
        $this->form_validation->set_rules('type', 'Vehicle Type', 'required|trim');
        $this->form_validation->set_rules('made', 'Make', 'required|trim');
        $this->form_validation->set_rules('model', 'Model', 'required|trim');
        $this->form_validation->set_rules('color', 'Color', 'required|trim');
        $this->form_validation->set_rules('plate_number', 'Plate No', 'required|trim');
        if ($this->form_validation->run() != FALSE) {
            $data['unite_no'] = $this->input->post('unite_no');
    		$data['type'] = $this->input->post('type');
            $data['made'] = $this->input->post('made');
            $data['model'] = $this->input->post('model');
            $data['color'] = $this->input->post('color');
            $data['plate_number'] = $this->input->post('plate_number');
            $data['parking_spot'] = $this->input->post('parking_spot');
            $data['visitor'] = '1';
            $data['note'] = $this->input->post('note');
            $data['ticket_no'] = $this->input->post('ticket_no');
           
            $this->db->where('id', $id);
            $this->db->update('tbl_cars', $data);


            $this->session->set_flashdata('message', 'Visitor car updated successfully!');
            redirect(admin_url('visitors'));
        } else {
           @$data['car']->add_edit = "edit";
           $data['car']->id = $id;
           $data['car']->unite_no = $this->input->post('unite_no');
           $data['car']->type = $this->input->post('type');
           $data['car']->made = $this->input->post('made');
           $data['car']->model = $this->input->post('model');
           $data['car']->color = $this->input->post('color');
           $data['car']->plate_number = $this->input->post('plate_number');
           $data['car']->parking_spot = $this->input->post('parking_spot');
           $data['car']->note = $this->input->post('note');
            $data['car']->ticket_no = $this->input->post('ticket_no');

            $this->session->set_flashdata('message', 'Please fill all required fields.');
            $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
            $data['title'] = 'Edit Vehicle';
            $data['unites'] = $this->db->get_where('tbl_users', array('created_by'=>$this->session->userdata('admin_user_id')))->result();
            $this->load->view('admin/visitors/form', $data);
        }
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