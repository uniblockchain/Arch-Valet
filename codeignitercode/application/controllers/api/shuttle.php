<?php

header('Access-Control-Allow-Origin: *');

class Shuttle extends CI_Controller {

    public function __construct() {




        parent::__construct();
         $this->load->library('form_validation');
    }

    
    function fetch_shuttle($unite) {

       $request = $this->db->select('*')->from('tbl_shuttle_settings')->join('tbl_users', 'tbl_shuttle_settings.admin_id = tbl_users.created_by')->where(array('unite_no'=> $unite))->get()->row ();

       // echo $this->db->last_query(); 
        if (!empty($request)) {
            $data = $request;
        } else {
            $data = $request;
        }

        echo json_encode($data);
    }

     function fetch_user_shuttle($unite) {

       $request = $this->db->select('*')->from('tbl_shuttle')->where(array('unite_no'=> $unite,'status' => 0))->get()->row ();

       // echo $this->db->last_query(); 
        if (!empty($request)) {
            $data = $request;
            $data->reservedate = date("d-m-Y", strtotime($data->reservedate));
            $time = strtotime($data->timereserved);
            $data->timereserved = date("g:i A", $time);
        } else {
            $data = $request;
        }
        // print_r($data);
        echo json_encode($data);
    }
    
     function cancel_user_shuttle($unite,$shuttleID) {

       $request = $this->db->where(array('unite_no'=> $unite,'id' => $shuttleID))->update('tbl_shuttle',array('status' => 1));

       // echo $this->db->last_query(); 
        if (!empty($request)) {
            $data = $request;
        } else {
            $data = $request;;
        }

        echo json_encode($data);
    }
    
    function reserve_user_shuttle() {

        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        if ($this->form_validation->run() == FALSE) {
            $response['dateError'] = strip_tags(form_error('date'));
            $response['timeError'] = strip_tags(form_error('time'));
            echo json_encode($response);
        } else {
            $data['reservedate'] = date("Y-m-d", strtotime($_POST['date']));
            $data['timereserved'] = $_POST['time'];
            $data['location'] = $_POST['location'];
            $data['unite_no'] = $_POST['unite_no'];
            $data['status'] = 0;

            $time = strtotime($data['timereserved']);
            $data['timereserved'] = date("H:i", $time);
            $startTime = date("H:i", strtotime('-30 minutes', $time));
            $endTime = date("H:i", strtotime('+30 minutes', $time));

            // print_r($data); echo $data['timereserved']; echo $startTime; echo $endTime; echo $_POST['toDo'];
            
            $requests = $this->db->select('*')->from('tbl_shuttle')->where(array('status' => 0, 'reservedate'=>$data['reservedate'], 'timereserved >='=> $startTime, 'timereserved <='=>$endTime))->get()->result();

            // echo json_encode($this->db->last_query());
            if($_POST['toDo'] == "check") {
                if(!empty($requests)){
                   $response['reserveError'] = "Shuttle service timing not available."; //.count($requests) ;
                } else {
                    $response['reserveError'] = "Shuttle service timing available."; //.count($requests) ;
                }
            } else if($_POST['toDo'] == "reserve") {
                if(!empty($requests)){
                   $response['reserveError'] = "Shuttle Service for this timing already exists."; //.count($requests) ;
                } else {
                    $this->db->insert('tbl_shuttle', $data);
                    $response['success'] = true;
                }
            }
            echo json_encode($response);
        }
    }

}