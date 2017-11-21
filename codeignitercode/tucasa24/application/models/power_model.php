<?php

class Power_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_power')->result_array();
    }

    function get_all_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('tbl_power')->row_array();
    }

    function get_all_front(){
        $this->db->order_by('order_id', 'ASC');
        return $this->db->get('tbl_power')->result();
    }



}

?>