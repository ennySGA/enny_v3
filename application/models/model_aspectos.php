<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_aspectos extends MY_Model{
	function __construct() {
        parent::__construct();
    }

    function get_by_id($table, $id){
        $this->db->where('id', $id);
        $query=$this->db->get($table);
        return $query->row();
    }

     function get_all_by_id1($table, $id_tipo){
        $this->db->where('id_tipo', $id_tipo);
        $this->db->where('active', 1);
        $query=$this->db->get($table);
        return $query->result();
    }

}
