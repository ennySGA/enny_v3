<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
        
        $this->load->model('model_widgets');
/*
        $this->load->model('model_usuarios');
        $this->load->model('model_estrategias');
        $this->load->model('model_texts');
        $this->load->model('model_checks');
        $this->load->model('model_comentarios');
       	$this->load->model('model_metas');
*/
	}
	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}

	public function index(){

	}

	function delete($id_widget, $id_estrategia){
		$this->model_widgets->delete('widget_obj',$id_widget);
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

}