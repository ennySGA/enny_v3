<?php 
class MY_Model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_table($table) {
        return $table;
    }
    function get_id_by_col($col,$val){

    }
    function get_all($table) {
       $data = $this->db->get($table);
		if($data->num_rows() > 0){
			return $data->result();
		}else{
			return FALSE;
		}
    }
     function get_all_by_id($table, $id_organizacion){
        $this->db->where('id_organizacion', $id_organizacion);
        $this->db->where('active', 1);
        $query=$this->db->get($table);
        return $query->result();
    }
    function get_by_id($table,$id){
    	$this->db->where('id', $id);
		$data = $this->db->get($table);
		if($data->num_rows > 0){
			return $data->result();
		}else{
			return FALSE;
		}
    }
    function get_by_id_cat($table,$col,$id){
    	$this->db->where($col, $id);
		$data = $this->db->get($table);
		if($data->num_rows > 0){
			return $data->result();
		}else{
			return FALSE;
		}
    }
    function insert($table,$data){
    	$this->db->insert($table, $data);
    }
    function update($table,$data,$id){
    	$this->db->where('id', $id);
		$this->db->update($table, $data);
    }
    function delete($table,$id){
    	$ndata = array('active' => 0);
		$this->db->where('id', $id);
		$this->db->update($table, $ndata);
    }
}

 ?>