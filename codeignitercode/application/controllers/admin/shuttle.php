<?php
error_reporting(E_ALL);
        ini_set('display_errors', 0);
class Shuttle extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    function index() {
                
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
        $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
        $data['shuttle'] =  $this->db->select('*,tbl_shuttle.status as shuttlestatus,tbl_shuttle.id as shuttleid')->from('tbl_shuttle')->join('tbl_users', 'tbl_shuttle.unite_no = tbl_users.unite_no')->where(array('MONTH(reservedate)'=> date('m'),'YEAR(reservedate)'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();

        $data['shuttlesettings'] = $this->db->select('*')->from('tbl_shuttle_settings')->where(array('admin_id'=>$this->session->userdata('admin_user_id')))->get()->row();

        if(!empty($data['shuttlesettings']->weekdays)){
         $data['shuttlesettings']->weekdays = json_decode($data['shuttlesettings']->weekdays);
        }

        $data['title'] = 'Shuttle Service';
        $this->load->view('admin/shuttle/list', $data);
    }
 

     public function generatepdf($month="current")
    {

        if($month == "current"){
            $data['shuttle'] =  $this->db->select('*,tbl_shuttle.status as shuttlestatus,tbl_shuttle.id as shuttleid')->from('tbl_shuttle')->join('tbl_users', 'tbl_shuttle.unite_no = tbl_users.unite_no')->where(array('MONTH(reservedate)'=> date('m'),'YEAR(reservedate)'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        } else {
            $data['shuttle'] =  $this->db->select('*,tbl_shuttle.status as shuttlestatus,tbl_shuttle.id as shuttleid')->from('tbl_shuttle')->join('tbl_users', 'tbl_shuttle.unite_no = tbl_users.unite_no')->where(array('MONTH(reservedate)'=> (date('m')-1),'YEAR(reservedate)'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        }

        $data['shuttlesettings'] = $this->db->select('*')->from('tbl_shuttle_settings')->where(array('admin_id'=>$this->session->userdata('admin_user_id')))->get()->row();

        if(!empty($data['shuttlesettings']->weekdays)){
         $data['shuttlesettings']->weekdays = json_decode($data['shuttlesettings']->weekdays);
        }

        
        //load the view and saved it into $html variable
        $html=$this->load->view('admin/shuttlereportpage', $data, true);
 
        $current = time();
        $today = gmdate("Y-m-d-H-i-s", $current);
        
        //this the the PDF filename that user will get to download
        $pdfFilePath = $today.'-valet-shuttle-report.pdf';
 
         //load mPDF library
        
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        
       // debug($html); 
       // exit;
  
       //generate the PDF from the given html
        $pdf->WriteHTML($html);
 
        //download it.
        $pdf->Output($pdfFilePath, "D");   
         exit;
        redirect(admin_url('shuttle'));     
    }



    function shuttle_by_date(){


        $from = $_POST['from'];
        $to = $_POST['to'];
        $fromdate = date('Y-m-d',strtotime($from));
        $todate = date('Y-m-d',strtotime($to));


        if(!$from || ! $to){
            redirect(admin_url('shuttle'));
        }
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
        $data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        
        $data['shuttle'] =  $this->db->select('*,tbl_shuttle.status as shuttlestatus,tbl_shuttle.id as shuttleid')->from('tbl_shuttle')->join('tbl_users', 'tbl_shuttle.unite_no = tbl_users.unite_no')->where(array('reservedate >='=> $fromdate,'reservedate <='=> $todate,'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();

        $data['shuttlesettings'] = $this->db->select('*')->from('tbl_shuttle_settings')->where(array('admin_id'=>$this->session->userdata('admin_user_id')))->get()->row();

        if(!empty($data['shuttlesettings']->weekdays)){
         $data['shuttlesettings']->weekdays = json_decode($data['shuttlesettings']->weekdays);
        }

        $data['printfromdate'] = $fromdate;
        $data['printtodate'] = $todate;
        $data['title'] = 'Vehicle Report';
        $this->load->view('admin/shuttle/shuttlebydate', $data); 
    }



    function generet_shuttle_by_date($fromdate,$todate) {
        //echo $date; exit;
        if($fromdate && $todate){
            $data['shuttle'] =  $this->db->select('*,tbl_shuttle.status as shuttlestatus,tbl_shuttle.id as shuttleid')->from('tbl_shuttle')->join('tbl_users', 'tbl_shuttle.unite_no = tbl_users.unite_no')->where(array('reservedate >='=> $fromdate,'reservedate <='=> $todate,'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
        }else{
            $data['shuttle'] = array('error:'=>'Nodate'); 
        }

        $data['shuttlesettings'] = $this->db->select('*')->from('tbl_shuttle_settings')->where(array('admin_id'=>$this->session->userdata('admin_user_id')))->get()->row();

        if(!empty($data['shuttlesettings']->weekdays)){
         $data['shuttlesettings']->weekdays = json_decode($data['shuttlesettings']->weekdays);
        }


        //load the view and saved it into $html variable
        $html=$this->load->view('admin/shuttlereportpage', $data, true);
 //       debug($html); exit;
 
        $current = time();
        $today = gmdate("Y-m-d-H-i-s", $current);
        

        //this the the PDF filename that user will get to download
        $pdfFilePath = $today.'-valet-shuttle-report.pdf';
 
        //load mPDF library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        
       // debug($html); 
       // exit;
  
       //generate the PDF from the given html
        $pdf->WriteHTML($html);
 
        //download it.
        $pdf->Output($pdfFilePath, "D"); ;   
        exit;
        redirect(admin_url('shuttle'));     
    }


    function past_shuttles_delete() {   //Cron run on every first day of new month         
        $this->db->where(array('MONTH(reservedate)'=> (date('m')-1),'YEAR(reservedate)'=> date('Y')));
        $this->db->delete('tbl_shuttle');     
    }

    function savesettings(){
        $data['admin_id'] = $this->session->userdata('admin_user_id');
        $data['enabled'] = $this->input->post('enabled') == "on" ? 1 : 0;

        if($data['enabled'] == 1){
            $data['weekdays'] = json_encode($this->input->post('weekdays'));
            $data['from'] = date("H:i", strtotime($this->input->post('from')));
            $data['to'] = date("H:i", strtotime($this->input->post('to')));
        } else {
            $data['weekdays'] = json_encode(array());
            $data['from'] = '';
            $data['to'] = '';
        }
        // print_r($data); print_r($this->input->post()); die();
        $shuttlesettings = $this->db->select('*')->from('tbl_shuttle_settings')->where(array('admin_id'=>$this->session->userdata('admin_user_id')))->get()->row();
        if(empty($shuttlesettings)){
            $this->db->insert('tbl_shuttle_settings', $data);
            $this->session->set_flashdata('message', 'Settings saved successfully!');
        } else {
            $this->db->update('tbl_shuttle_settings', $data);
            $this->session->set_flashdata('message', 'Settings updated successfully!');
        }

        redirect(admin_url('shuttle'));
    }

    function cancel_user_shuttle($shuttleID) {
       $request = $this->db->where(array('id' => $shuttleID))->update('tbl_shuttle',array('status' => 1));
       redirect(admin_url('shuttle'));
    }

    function complete_user_shuttle() {

      $query = $this->db->query("UPDATE tbl_shuttle SET `status` = 2 WHERE `status` = 0 and reservedate <= DATE(NOW()) and timereserved <= DATE_SUB(NOW(),INTERVAL 30 MINUTE)");

       // echo $this->db->last_query();
       // exit;
       // redirect(admin_url('shuttle'));
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>