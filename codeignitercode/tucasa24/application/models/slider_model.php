<?php

class Slider_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_slider')->result_array();
    }

    function get_all_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('tbl_slider')->row_array();
    }

    function get_all_front() { //function to call frontend
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_slider')->result_array();
    }

}

?>