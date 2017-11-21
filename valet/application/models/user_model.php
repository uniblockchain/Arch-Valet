<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    

    function unite_no_exists($unite_no){
        $this->db->from('tbl_users');
        $this->db->where('unite_no',$unite_no);
        $query=$this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
             return $query->row()->id;
        }
    }
    


    function get_password_unite_no($unite_no){
        return $this->db->get_where('tbl_users',array('unite_no'=>$unite_no))->row()->password;
    }
    
    
    
        function admin_unite_no_exists($unite_no){
        $this->db->from('admin');
        $this->db->where('username',$unite_no);
        $query=$this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
             return $query->row()->id;
        }
    }
    
    
      function admin_get_password_unite_no($unite_no){
        return $this->db->get_where('admin',array('username'=>$unite_no))->row()->password;
    }
    


    
    

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>