<?php

class Cars extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();		
		
		$data['cars'] = $this->db->select('*')->from('tbl_cars')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('visitor'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_cars.id','desc')->get()->result();
		
        // $data['cars'] = $this->db->order_by('id','desc')->get_where('tbl_cars', array('visitor'=>'0'))->result();
        $data['title'] = 'Vehicle Information';
        $this->load->view('admin/cars/list', $data);
    }

    function add_new() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
		$data['title'] = 'Add Vehicle';
        $data['unites'] = $this->db->get_where('tbl_users', array('created_by'=>$this->session->userdata('admin_user_id')))->result();
        $this->load->view('admin/cars/form', $data);
    }

    function edit($id=FALSE) {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        if (!$id) {
            redirect(admin_url('cars'));
        }
        $data['unites'] = $this->db->get_where('tbl_users', array('created_by'=>$this->session->userdata('admin_user_id')))->result();
        $data['car'] = $this->db->get_where('tbl_cars', array('id' => $id))->row();
        $data['title'] = 'Edit Vehicle';
        $this->load->view('admin/cars/form', $data);
    }

    function save() {
		//debug($_POST); exit;
        $data['unite_no'] = $this->input->post('unite_no');
		$data['type'] = $this->input->post('type');
        $data['made'] = $this->input->post('made');
        $data['model'] = $this->input->post('model');
        $data['color'] = $this->input->post('color');
        $data['plate_number'] = $this->input->post('plate_number');
        $data['parking_spot'] = $this->input->post('parking_spot');
        $data['created_date'] = time();
        $data['note'] = $this->input->post('note');
        $this->db->insert('tbl_cars', $data);

        $this->session->set_flashdata('message', 'Vehicle added successfully!');
        redirect(admin_url('cars'));
    }

    function update($id) {
        $data['unite_no'] = $this->input->post('unite_no');
		$data['type'] = $this->input->post('type');
        $data['made'] = $this->input->post('made');
        $data['model'] = $this->input->post('model');
        $data['color'] = $this->input->post('color');
        $data['plate_number'] = $this->input->post('plate_number');
        $data['parking_spot'] = $this->input->post('parking_spot');
        $data['note'] = $this->input->post('note');
       
        $this->db->where('id', $id);
        $this->db->update('tbl_cars', $data);


        $this->session->set_flashdata('message', 'Vehicle updated successfully!');
        redirect(admin_url('cars'));
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_cars');
        $this->session->set_flashdata('message', 'Vehicle deleted succesfully');
        redirect(admin_url('cars'));
    }


}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>