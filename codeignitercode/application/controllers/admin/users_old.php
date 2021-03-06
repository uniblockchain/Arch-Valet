<?php

class Users extends Admin_Controller {

    function __construct() {


        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }



    function index() {
//        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
        $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
        $data['users'] = $this->db->get('tbl_users')->result();
        $data['title'] = 'Unites Information';
        $this->load->view('admin/user/list', $data);
    }

    function add_new() {
//        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
        $data['title'] = 'Add Unite';
        $this->load->view('admin/user/form', $data);
    }

    function edit($id=FALSE) {
        if (!$id) {
            redirect(admin_url('users'));
        }
//        $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'0'))->result();
        $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'0','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
        $data['user'] = $this->db->get_where('tbl_users', array('id' => $id))->row();
        $data['title'] = 'Edit Unite';
        $this->load->view('admin/user/form', $data);
    }

    function save() {
//debug($_POST); exit;

        if ($this->input->post('password') != $this->input->post('repeat_password')) {
            $this->session->set_flashdata('message', 'Password and repeated password did not match');
            redirect(admin_url('users/add_new'));
        }
        $this->form_validation->set_rules('unite_no', 'Unite No', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required|xss_clean');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add_new();
            return false;
        }

        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['unite_no'] = $this->input->post('unite_no');
        $data['contact_no'] = $this->input->post('contact_no');
        $password = md5(config_item('salt') . $this->input->post('password'));
        $data['password'] = $password;
        $this->db->insert('tbl_users', $data);

        $this->session->set_flashdata('message', 'Unite added successfully!');
        redirect(admin_url('users'));
    }

    function update($id) {
        if ($this->input->post('password') != "" && $this->input->post('password') != $this->input->post('repeat_password')) {
            $this->session->set_flashdata(
                    'message', 'New password should match to repeat password to change password');
            redirect(admin_url('users/edit/' . $id));
        }
        $this->form_validation->set_rules('unite_no', 'Unite No', 'trim|required|xss_clean');

        $this->form_validation->set_rules('email', 'Eamil', 'valid_email|trim|required|xss_clean');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
            return false;
        }


        if ($this->input->post('password') != "") {
            $password = md5(config_item('salt') . $this->input->post('password'));
            $data['password'] = $password;
        }


        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['unite_no'] = $this->input->post('unite_no');
        $data['contact_no'] = $this->input->post('contact_no');
        
       
        $this->db->where('id', $id);
        $this->db->update('tbl_users', $data);


        $this->session->set_flashdata('message', 'Unite updated successfully!');
        redirect(admin_url('users'));
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
        $this->session->set_flashdata('message', 'Unite deleted succesfully');
        redirect(admin_url('users'));
    }


}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>