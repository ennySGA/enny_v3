<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_usuarios extends MY_Model{
	function __construct() {
        parent::__construct();
    }

    public function get_by_login($correo, $password){
    	$this->db->where('email',$correo);
    	$this->db->where('password',$password);
    	$query=$this->db->get('usuarios');
    	return $query->row();
    }

    function get_by_password($id, $password){
        $this->db->where('id', $id);
        $this->db->where('password', $password);
        $query=$this->db->get('usuarios');
        return $query->row();
    }

    function get_by_id($table, $id){
        $this->db->where('id', $id);
        $query=$this->db->get('usuarios');
        return $query->row();
    }

    function get_all_by_id($table, $id){
        $this->db->where('id_organizacion', $id);
        $query=$this->db->get('usuarios');
        return $query->result();
    }
    
  public function update_avatar($id){
        if($_FILES['avatar']['error'] == 0){
            $relative_url = 'avatars/'.$this->upload->file_name;
            $data['avatar'] = $relative_url;
        }
        $this->update('usuarios', $data, $id);
    }

     
}