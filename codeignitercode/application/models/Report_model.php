<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

	var $column_order = array(null, 'unite_no','made','model','time','date','status'); //set column field database for datatable orderable
	var $column_search = array('unite_no','made','model','time','date','status'); //set column field database for datatable searchable  

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		// $reports = $this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m'),'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')))->limit($length,$start)->order_by('tbl_request_report.id','DESC')->get();

		// $car_detail = $this->db->get_where('tbl_cars', array('id'=>$r->car_id))->row();
		
		
		$this->db->select('*')->from('tbl_request_report')->join('tbl_cars', 'tbl_cars.id = tbl_request_report.car_id')->join('tbl_users', 'tbl_cars.unite_no = tbl_users.unite_no')->where(array('MONTH(FROM_UNIXTIME(requested_timestamp))'=> date('m'),'YEAR(FROM_UNIXTIME(requested_timestamp))'=> date('Y'),'tbl_users.created_by'=>$this->session->userdata('admin_user_id')));

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		$this->db->order_by('tbl_request_report.id','DESC');
	}

	function getreport_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		// echo $this->db->last_query(); exit;
		return $query->result();
	}

	function count_filtered_reports()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_reports()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}
