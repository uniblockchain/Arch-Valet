<?php
error_reporting(E_ALL);
        ini_set('display_errors', 0);
class Report extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('report_model');
        $this->load->library('form_validation');
    }

    function index() {
				
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
		// $data['report'] =  $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m'),'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_request_report.id','DESC')->get()->result();
				
        // $data['report'] = $this->db->order_by('id','desc')->get_where('tbl_request_report', array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m'),'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y')))->result();
		
        $data['title'] = 'Vehicle Report';
        $this->load->view('admin/report/list', $data);
    }
	
	public function report_page(){           
		$reports = $this->report_model->getreport_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach($reports as $r) {
			$no++;
			if(!empty($r->requested_timestamp)){ 
				$report_time = date('h:i A', $r->requested_timestamp); 
			} 
			if(!empty($r->requested_timestamp)){ 
				$report_date = date('M j, Y', $r->requested_timestamp); 
			}
			$status = '';
			if($r->status == '0'){ 
				$status = '<span class="label label-info">Requested</span>';
			}if($r->status == '2'){ 
				$status = '<span class="label label-success">Request accepted</span>';
			}if($r->status == '3'){    
				$status = '<span class="label label-danger">Request refused</span>';
			}if($r->status == '4'){ 
				$status = '<span class="label label-primary">Car in</span>';
			} 
				
		   $data[] = array(
				$no,
				$r->unite_no,
				$r->made,
				$r->model,
				$report_time,
				$report_date,
				$status
		   );
        }
			
		$output = array(
		 "draw" => $_POST['draw'],
		 "recordsTotal" => $this->report_model->count_all_reports(),
		 "recordsFiltered" => $this->report_model->count_filtered_reports(),
		 "data" => $data
		);
		  
        echo json_encode($output);
	}

 

    public function generatepdf($month="current")
    {

        // $data['report'] = $this->db->order_by('id','desc')->get_where('tbl_request_report', array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m')-1,'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y')))->result();
		
		if($month == "current"){
			$data['report'] =  $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m'),'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_request_report.id','DESC')->get()->result();
		} else {
			$data['report'] =  $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m')-1,'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_request_report.id','DESC')->get()->result();
		}

        //load the view and saved it into $html variable
        $html=$this->load->view('admin/reportpage', $data, true);
 
        $current = time();
        $today = gmdate("Y-m-d-H-i-s", $current);
        
        //this the the PDF filename that user will get to download
        $pdfFilePath = $today.'-valet-report.pdf';
 

        //load mPDF library
        $this->load->library('m_pdf');
		
		// echo $pdfFilePath;
       // debug($html); 
	   // exit;
 
  
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output("../uploads/".$pdfFilePath, "D");   
         exit;
        redirect(admin_url('report'));     
    }



    function report_by_date(){


        $var = $_POST['date'];
        $date = str_replace('/', '-', $var);

        if(!$date){
            redirect(admin_url('report'));
        }
        // $data['all_requests'] = $this->db->get_where('tbl_requests', array('status'=>'1'))->result();
		$data['all_requests'] = $this->db->select('*')->from('tbl_requests')->join('tbl_cars', 'tbl_cars.id = tbl_requests.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('tbl_requests.status'=>'1','tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->get()->result();
		
        // $data['report'] = $this->db->order_by('id','desc')->get_where('tbl_request_report', array('requested_date'=>$date))->result();
		$data['report'] =  $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('requested_date'=>$date,'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_request_report.id','DESC')->get()->result();
		
		
        $data['printdate'] = $date;

        $data['title'] = 'Vehicle Report';
        $this->load->view('admin/report/reportbydate', $data); 
    }



    function generet_report_by_date($date) {
        //echo $date; exit;
        if($date){
        // $data['report'] = $this->db->order_by('id','desc')->get_where('tbl_request_report', array('requested_date'=>$date))->result();
		$data['report'] =  $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('requested_date'=>$date,'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->order_by('tbl_request_report.id','DESC')->get()->result();
        }else{
            $data['report'] = array('error:'=>'Nodate'); 
        }

        

        //load the view and saved it into $html variable
        $html=$this->load->view('admin/reportpage', $data, true);
 //       debug($html); exit;
 
        $current = time();
        $today = gmdate("Y-m-d-H-i-s", $current);
        

        //this the the PDF filename that user will get to download
        $pdfFilePath = $today.'-valet-report.pdf';
 
        //load mPDF library
        $this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");   
        exit;
        redirect(admin_url('report'));     
    }


	function past_reports_delete() {   //Cron run on every first day of new month         
        $this->db->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))<'=> date('m')-1,'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y')));
        $this->db->delete('tbl_request_report');     
		// echo $this->db->last_query(); exit;
    }


}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>