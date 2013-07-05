<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_widgets extends MY_Model{

	public function get_all_by_estrategia($id_estrategia){
		$this->db->where('id_estrategia',$id_estrategia);
		$this->db->where('active','1');
		$query=$this->db->get('widget_obj');
		return $query->result();
	}

	public function insert_w($data){
		$this->db->insert('widget_obj',$data);
		return $this->db->insert_id();
	}
}