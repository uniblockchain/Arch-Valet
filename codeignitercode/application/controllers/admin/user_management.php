<?php

class User_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        $data['title'] = "Admins";
        $data['users'] = $this->db->get_where('admin', array('role !='=>'superadmin'))->result();
        $this->load->view('admin/adminpanel/list', $data);
    }

    function add_new() {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        $data['title'] = "Add Admin";
        $this->load->view('admin/adminpanel/form', $data);
    }

    function edit($id) {
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        $data['user'] = $this->db->get_where('admin', array('id' => $id))->row();
        $data['title'] = "Edit Admin";
        $this->load->view('admin/adminpanel/form', $data);
    }

    function save() {


        if ($this->input->post('password') != $this->input->post('repeat_password')) {
            $this->session->set_flashdata('message', 'Password and repeated password did not match');
            redirect(admin_url('user_management'));
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|');
        $this->form_validation->set_rules('email', 'Eamil', 'valid_email|trim|required|xss_clean');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('building_name', 'Name', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->add_new();
            return false;
        }

        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('name');
        $password = md5(config_item('salt') . $this->input->post('password'));
        $data['password'] = $password;
        $data['created'] = time();
        $data['name'] = $this->input->post('name');
        $data['building_name'] = $this->input->post('building_name');
        $this->db->insert('admin', $data);
        $this->session->set_flashdata('message', 'Admin user added successfully!');
        redirect(admin_url('user_management'));
    }

    function update($id) {
        if ($this->input->post('password') != "" && $this->input->post('password') != $this->input->post('repeat_password')) {
            $this->session->set_flashdata(
                    'message', 'New password should match to repeat password to change password');
            redirect(admin_url('user_management/edit/' . $id));
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');

        $this->form_validation->set_rules('email', 'Eamil', 'valid_email|trim|required|xss_clean');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('building_name', 'Name', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
            return false;
        }

        if ($this->input->post('password') != "") {
            $password = md5(config_item('salt') . $this->input->post('password'));
            $data['password'] = $password;
        }
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');
        $data['created'] = time();
        $data['name'] = $this->input->post('name');
        $data['building_name'] = $this->input->post('building_name');
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
        $this->session->set_flashdata('message', 'Admin updated  added successfully!');
        redirect(admin_url('user_management'));
    }

    function delete($id) {
        $total_users = $this->db->count_all('admin');
        if ($total_users == 1) {
            $this->session->set_flashdata('message', 'This admin cannot be  deleted');
            redirect(admin_url('user_management'));
        }
        $this->db->where('id', $id);
        $this->db->delete('admin');
        $this->session->set_flashdata('message', 'Admin deleted succesfully');
        redirect(admin_url('user_management'));
    }
   
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
