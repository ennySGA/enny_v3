<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_estrategias extends MY_Model{

	public function get_by_etapa($id_organizacion,$id_etapa){
		$this->db->where('id_organizacion',$id_organizacion);
		$this->db->where('id_etapa',$id_etapa);
		$query=$this->db->get('estrategias');
		return $query->result();
	}

}