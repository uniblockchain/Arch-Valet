<?php

//require APPPATH.'/libraries/REST_Controller.php';

class Cars extends CI_Controller {

    public function __construct() {


        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }

        parent::__construct();
         $this->load->library('form_validation');
    }

    function cars_add() {
        
        
        $this->form_validation->set_rules('parking', 'Parking', 'required|trim');
        $this->form_validation->set_rules('made', 'Made No', 'required');
        $this->form_validation->set_rules('plate', 'Plate No', 'required|trim');
        $this->form_validation->set_rules('modal', 'Modal No', 'required|trim');
        $this->form_validation->set_rules('color', 'Color', 'required|trim');
           if ($this->form_validation->run() == FALSE) {
            $response['parkingError'] = strip_tags(form_error('parking'));
            $response['madeError'] = strip_tags(form_error('made'));
            $response['plateError'] = strip_tags(form_error('plate'));
            $response['modalError'] = strip_tags(form_error('modal'));
            $response['colorError'] = strip_tags(form_error('color'));
            echo json_encode($response);
        }else {
        $data['parking_spot'] = $_POST['parking'];
        $data['made'] = $_POST['made'];
        $data['model'] = $_POST['modal'];
        $data['color'] = $_POST['color'];
        $data['plate_number'] = $_POST['plate'];
        $data['unite_no'] = $_POST['unite_no'];
        $data['visitor'] = 0;
        $data['created_date'] = time();
        $this->db->insert('tbl_cars', $data);
        $response['success'] = true;
        echo json_encode($response);
        }
    }
    
    function cars_add_visitors() {
        
             
        $this->form_validation->set_rules('parking', 'Parking', 'required|trim');
        $this->form_validation->set_rules('made', 'Made No', 'required');
        $this->form_validation->set_rules('plate', 'Plate No', 'required|trim');
        $this->form_validation->set_rules('modal', 'Modal No', 'required|trim');
        $this->form_validation->set_rules('color', 'Color', 'required|trim');
           if ($this->form_validation->run() == FALSE) {
            $response['parkingError'] = strip_tags(form_error('parking'));
            $response['madeError'] = strip_tags(form_error('made'));
            $response['plateError'] = strip_tags(form_error('plate'));
            $response['modalError'] = strip_tags(form_error('modal'));
            $response['colorError'] = strip_tags(form_error('color'));
            echo json_encode($response);
        }else {
        
        $data['parking_spot'] = $_POST['parking'];
        $data['made'] = $_POST['made'];
        $data['model'] = $_POST['modal'];
        $data['color'] = $_POST['color'];
        $data['plate_number'] = $_POST['plate'];
        $data['unite_no'] = $_POST['unite_no'];
        $data['visitor'] = 1;
        $data['created_date'] = time();
        $this->db->insert('tbl_cars', $data);
    }
    
    }

    function fetch_cars($unite) {
        $this->db->where('unite_no', $unite);
        $data = $this->db->get('tbl_cars')->result();

        foreach ($data as $key => $val) {
            
            $this->db->order_by('id','desc');
            $this->db->where('car_id',$val->id);
         $request =   $this->db->get('tbl_requests')->row();
           // $request = $this->db->get_where('tbl_requests', array('car_id' => $val->id))->row();
            
            if (!empty($request)) {
                $data[$key]->statuss = $request->status;
            } else {
                $data[$key]->statuss = '';
            }
        }

        echo json_encode($data);
    }
    function fetch_cars_visitors($unite) {
        $this->db->where('visitor',1);
        $this->db->where('unite_no', $unite);
        
        $data = $this->db->get('tbl_cars')->result();

        foreach ($data as $key => $val) {
            $request = $this->db->get_where('tbl_requests', array('car_id' => $val->id))->row();
            if (!empty($request)) {
                $data[$key]->statuss = $request->status;
            } else {
                $data[$key]->statuss = '';
            }
        }

        echo json_encode($data);
    }

    function request_cars($id) {

        $data['car_id'] = $id;
        $data['request_date'] = time();
        $data['request_time'] = time();
        $data['request_timestamp'] = time();
        $data['status'] = 1;
        $this->db->insert('tbl_requests', $data);

        $insert_id = $this->db->insert_id();
        $res = $this->db->get_where('tbl_requests', array('id' => $insert_id))->row();

        $cars['car_id'] = $id;
        $cars['requested_date'] = time();
        $cars['request_id'] = $insert_id;
        $this->db->insert('tbl_request_report', $cars);
        
        
        $cars = $this->db->get_where('tbl_cars',array('id'=>$id))->row();
        $noti['unite_no'] = $cars->unite_no;
        $noti['car_id'] = $cars->id;
        $noti['message'] = 'Your vehicle has been requested for ready';
        $noti['title'] = 'Requested for vehicle ready';
        $noti['date'] = time();
        $this->db->insert('tbl_notifications',$noti);


        echo json_encode($res);
    }

    function update_request_cars($id) {

       // $data['car_id'] = $id;
        $data['status'] = 1;
        $data['updated_date_time'] = time();
        $this->db->where('car_id', $id);
        $this->db->update('tbl_requests', $data);
        //$insert_id = $this->db->insert_id();

        $res = $this->db->get_where('tbl_requests', array('car_id' => $id))->row();

        $cars['car_id'] = $id;
        $cars['requested_date'] = time();
        $cars['request_id'] = $res->id;
        $cars['status'] = $res->status;
        $this->db->insert('tbl_request_report', $cars);


        echo json_encode($res);
    }
    function update_cancle_request_cars($id) {

        
        $latest = $this->db->get_where('tbl_requests', array('car_id'=>$id))->row();
        
        $data['status'] = 3;
        $data['updated_date_time'] = time();
        $this->db->where('id', $latest->id);
        $this->db->update('tbl_requests', $data);
        //$insert_id = $this->db->insert_id();

        $res = $this->db->get_where('tbl_requests', array('car_id' => $id))->row();

        $cars['car_id'] = $id;
        $cars['requested_date'] = time();
        $cars['request_id'] = $res->id;
        $cars['status'] = $res->status;
        $this->db->insert('tbl_request_report', $cars);


        echo json_encode($res);
    }

}
