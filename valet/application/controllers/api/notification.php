<?php

class Notification extends CI_Controller {

    public function __construct() {


        parent::__construct();
        //  $this->load->model('User_model');
    }
    
    function notifi($id){
       

    $this->db->select('tbl_cars.*,tbl_notifications.*');
    $this->db->from('tbl_cars');
    $this->db->join('tbl_notifications', 'tbl_cars.id = tbl_notifications.car_id');

    $arr = array('tbl_notifications.unite_no' => $id, 'tbl_notifications.status' => '1', 'tbl_notifications.seen' => '0');

/*    $this->db->where('tbl_notifications.unite_no',$id); 
    $this->db->where('tbl_notifications.status','1');*/

    $this->db->where($arr);

    $this->db->order_by('tbl_notifications.id','desc');
    $query = $this->db->get();


        $res = $query->result();

      echo json_encode($res);
    }

 
    function clean($id){
    
       $this->db->where('unite_no',$id);
       $this->db->set('seen',1);
       $this->db->update('tbl_notifications');

        $this->db->select('tbl_cars.*,tbl_notifications.*');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_notifications', 'tbl_cars.id = tbl_notifications.car_id');
        $this->db->where('tbl_notifications.unite_no',$id); 
        $this->db->where('tbl_notifications.seen','0');

        $this->db->order_by('tbl_notifications.id','desc');
        $query = $this->db->get();


        $res = $query->result();

        echo json_encode($res);
    }



    function countNotify($unit){
        $this->db->where('unite_no',$unit);
        $this->db->where('flag','0');
        $this->db->where('status','1');
        $this->db->where('seen','0');
        $res = $this->db->get('tbl_notifications')->result();
        $total['total'] = count($res);
        echo  json_encode($total);
    }
        
    function reset_notification($id){
       $this->db->where('unite_no',$id);
       $this->db->set('flag',1);
       $this->db->update('tbl_notifications');

    }

   




    function ready($id) {
        $data['status'] = '4';
        $data['updated_date_time'] = time();
        $this->db->where('id', $id);
        $this->db->update('tbl_requests', $data);
        $this->session->set_flashdata('message', 'Car is ready !');
        
        $detail = $this->db->get_where('tbl_requests', array('id'=>$id))->row();
    
        

        
        
         $cars = $this->db->get_where('tbl_cars',array('id'=>$car['car_id']))->row();
        $noti['unite_no'] = $cars->unite_no;
        $noti['car_id'] = $cars->id;
        $noti['message'] = 'The car you requestd is ready!';
        $noti['status'] = 0;
        $noti['title'] = 'Car is ready';
        $noti['date'] = time();
        $this->db->insert('tbl_notifications',$noti);
        
         

        $this->load->model('push');
        $this->push->android('Car ready','Your Car is ready',$cars->unite_no);
        $this->push->ios('Car ready','Your car is ready',$cars->unite_no);
        //$this->push->android_admin('Car request','Your have a new car request');
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
        
      
        
     }




   

}
