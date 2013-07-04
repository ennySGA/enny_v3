<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_texts extends MY_Model{

	public function get_all_by_widget($id_widget){
		$this->db->where('id_widget',$id_widget);
		$query=$this->db->get('text');
		return $query->result();
	}
}