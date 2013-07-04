<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Legislaciones extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('model_legislaciones');
	}

	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}

	function index(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['nombre']='Legislación ambiental';
		$data['leyes']=$this->model_legislaciones->get_all_by_id($id_organizacion);
		$data['view']="legislaciones/ver";
		$this->load->view('template/body', $data);	
	}

	function insert(){
		$data=array('nombre'=>'Legislación ambiental');
		$data['view']='legislaciones/insert';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('tipo', 'Tipo', 'trim|required|alpha_dash|max_length[120]');
		$this->form_validation->set_rules('autoridad', 'Autoridad', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('actualizacion', 'Actualizacion', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required|');
		$this->form_validation->set_rules('ult_act', 'Última actualización', 'trim|required');
		$this->form_validation->set_rules('articulo', 'Artículo', 'trim|required');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required');
		$this->form_validation->set_rules('requisitos', 'Requisitos', 'trim|required');
		$this->form_validation->set_rules('fuente', 'Fuente', 'trim|required');
		$this->form_validation->set_rules('cumple', 'Se cumple', 'trim|required');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'tipo' => $this->input->post('tipo'),
			'autoridad' => $this->input->post('autoridad'),
			'actualizacion' => $this->input->post('actualizacion'),
			'descripcion' => $this->input->post('descripcion'),
			'ult_act' => $this->input->post('ult_act'),
			'articulo' => $this->input->post('articulo'),
			'nivel' => $this->input->post('nivel'),
			'requisitos' => $this->input->post('requisitos'),
			'fuente' => $this->input->post('fuente'),
			'cumple' => $this->input->post('cumple'),
			'id_organizacion' => $this->session->userdata('id_organizacion')
			);
		$this->model_legislaciones->insert('leyes',$data);
		redirect('legislaciones', 'refresh');
		}
	
		$this->load->view('template/body', $data);
	}

	public function update($id){
		$id=$id;
		$data['leyes']=$this->model_legislaciones->get_by_id('leyes', $id);
		$data['nombre']='Legislación ambiental';
		$data['view']='legislaciones/update';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('tipo', 'Tipo', 'trim|required|alpha_dash|max_length[120]');
		$this->form_validation->set_rules('autoridad', 'Autoridad', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('actualizacion', 'Actualizacion', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required|');
		$this->form_validation->set_rules('ult_act', 'Última actualización', 'trim|required');
		$this->form_validation->set_rules('articulo', 'Artículo', 'trim|required');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required');
		$this->form_validation->set_rules('requisitos', 'Requisitos', 'trim|required');
		$this->form_validation->set_rules('fuente', 'Fuente', 'trim|required');
		$this->form_validation->set_rules('cumple', 'Se cumple', 'trim|required');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'tipo' => $this->input->post('tipo'),
			'autoridad' => $this->input->post('autoridad'),
			'actualizacion' => $this->input->post('actualizacion'),
			'descripcion' => $this->input->post('descripcion'),
			'ult_act' => $this->input->post('ult_act'),
			'articulo' => $this->input->post('articulo'),
			'nivel' => $this->input->post('nivel'),
			'requisitos' => $this->input->post('requisitos'),
			'fuente' => $this->input->post('fuente'),
			'cumple' => $this->input->post('cumple')
			);
		$this->model_legislaciones->update('leyes', $data, $id);
		redirect('legislaciones', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	function delete($id){
		$id=$id;
		$this->model_legislaciones->delete('leyes', $id);
		redirect('legislaciones');
	}
}