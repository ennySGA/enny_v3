<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_organizacion extends MY_Model{

	function __construct() {
        parent::__construct();
    }

    function insert($table,$organizacion){
    	$this->db->insert($table, $organizacion);
    	return $this->db->insert_id();
    }

    function get_by_id($table, $id){
        $this->db->where('id', $id);
        $query=$this->db->get($table);
        return $query->row();
    }

    public function update_logo($id_organizacion){
		if($_FILES['logo']['error'] == 0){
		    $relative_url = 'logos/'.$this->upload->file_name;
		    $organizaciones_data['logo'] = $relative_url;
		}
		$this->update('organizaciones', $organizaciones_data, $id_organizacion);
	}

}