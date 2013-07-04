<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_checks extends MY_Model{

	public function get_all_by_widget($id_widget){
		$this->db->where('id_widget',$id_widget);
		$this->db->order_by('creado','asc');
		$query=$this->db->get('checklist');
		return $query->result();
	}

	public function delete_c($data){
		$this->db->delete('checklist',$data);
	}
}