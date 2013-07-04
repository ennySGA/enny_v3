<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_comentarios extends MY_Model{

	public function get_all_by_widget($id_widget){
		$this->db->from('comentarios as A');
		$this->db->join('usuarios as B','A.id_usuario=B.id');
		
		$this->db->select('A.*');
		$this->db->select('B.nombre as username, B.avatar');
		
		$this->db->where('id_widget',$id_widget);
		$this->db->order_by('creado','asc');
		$query=$this->db->get();
		return $query->result();
	}

	public function delete($data){
		$this->db->delete('comentarios',$data);
	}
}