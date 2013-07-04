<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_legislaciones extends MY_Model{
	function __construct() {
        parent::__construct();
    }

    function get_by_id($table, $id){
        $this->db->where('id', $id);
        $query=$this->db->get('leyes');
        return $query->row();
    }

    function get_all_by_id($id_organizacion){
    	$this->db->where('id_organizacion', $id_organizacion);
    	$query=$this->db->get('leyes');
    	return $query->result();
    }

    function delete($table, $id){
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
}
