<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Procesos extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('model_procesos');
		$this->load->model('model_usuarios');
	}

	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}
	
	function index(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['usuarios']=$this->model_usuarios->get_by_id('usuarios', 1);
		$data['procesos']=$this->model_procesos->get_all_by_id('procesos', $id_organizacion);
		$data['nombre']='Procesos';
		$data['view']='procesos/procesos/ver';
		$this->load->view('template/body', $data);
	}

	function insert(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['nombre']='Procesos';
		$data['view']='procesos/procesos/insert';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'id_organizacion' => $id_organizacion,
			'nombre' => $this->input->post('nombre'),
			'active' => "1"
			);
		$this->model_procesos->insert('procesos',$data);
		redirect('procesos/procesos/ver', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	function update($id){
		$id=$id;
		$data['procesos']=$this->model_procesos->get_by_id('tipos_aspectos', $id);
		$data['nombre']='Edita el proceso';
		$data['view']='procesos/procesos/update';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			);
		$this->model_procesos->update('procesos', $data, $id);
		redirect('procesos/procesos/ver', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	function delete($id){
		$id=$id;
		$this->model_procesos->delete('procesos', $id);
		redirect('procesos/procesos/ver');
	}


}