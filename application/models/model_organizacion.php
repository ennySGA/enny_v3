<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_organizacion extends MY_Model{

	function __construct() {
        parent::__construct();
    }

    public function update_logo($id_organizacion){
		if($_FILES['logo']['error'] == 0){
		    $relative_url = 'logos/'.$this->upload->file_name;
		    $organizaciones_data['logo'] = $relative_url;
		}
		$this->update('organizaciones', $organizaciones_data, $id_organizacion);
	}

}