<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_metas extends CI_Model{

	public function get_by_estrategia($id_estrategia){
		$this->db->where('id_estrategia',$id_estrategia);
		$query=$this->db->get('metas');
		return $query->result();
	}
}