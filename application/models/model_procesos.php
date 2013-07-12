<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_procesos extends MY_Model{
	function __construct() {
        parent::__construct();
    }

    function get_by_id($table, $id){
        $this->db->where('id', $id);
        $this->db->where('active', 1);
        $query=$this->db->get($table);
        return $query->row();
    }

}
