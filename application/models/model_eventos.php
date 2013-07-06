<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_eventos extends CI_Model{

	public function get_by_estrategia($id_estrategia){
		$this->db->where('id_estrategia',$id_estrategia);
		$query=$this->db->get('eventos');
		return $query->result();
	}

	public function get_all_by_widget($id_widget){
		$this->db->where('id_widget',$id_widget);
		$query=$this->db->order_by('created','asc');
		$query=$this->db->get('eventos');
		return $query->result();
	}

	public function delete_e($data){
		$this->db->delete('eventos',$data);
	}
}