<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aspectos extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('model_aspectos');
	}

	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}
											/* ------ T I P O S  D E  A S P E C T O S  A M B I E N T A L E S ---- */
	function tipos_aspectos(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['nombre']='Tipos de aspectos ambientales';
		$data['tipos_aspectos']=$this->model_aspectos->get_all_by_id('tipos_aspectos', $id_organizacion);
		$data['view']="aspectos/tipos_aspectos/ver";
		$this->load->view('template/body', $data);	
	}

	function insert_tipos_aspectos(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['nombre']='Tipos de aspectos ambientales';
		$data['view']='aspectos/tipos_aspectos/insert';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'id_organizacion' => $id_organizacion,
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'active' => "1"
			);
		$this->model_aspectos->insert('tipos_aspectos',$data);
		redirect('aspectos/tipos_aspectos', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	public function update_tipos_aspectos($id){
		$id=$id;
		$data['tipos_aspectos']=$this->model_aspectos->get_by_id('tipos_aspectos', $id);
		$data['nombre']='Tipo de aspecto ambiental';
		$data['view']='aspectos/tipos_aspectos/update';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion')
			);
		$this->model_aspectos->update('tipos_aspectos', $data, $id);
		redirect('aspectos/tipos_aspectos', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	function delete_tipos_aspectos($id){
		$id=$id;
		$this->model_aspectos->delete('tipos_aspectos', $id);
		redirect('aspectos/tipos_aspectos');
	}
											/* ----- A S P E C T O S  A M B I E N T A L E S ---- */

	function aspectos_ambientales($id_tipo){
		$id_tipo=$id_tipo;
		$data['aspectos']=$this->model_aspectos->get_all_by_id1('aspectos', $id_tipo);
		$data['tipo_aspecto']=$this->model_aspectos->get_by_id('tipos_aspectos', $id_tipo);
		$data['id_tipo']=$id_tipo;
		$data['nombre']='Aspecto ambiental';
		$data['view']='aspectos/aspectos/ver';
		$this->load->view('template/body', $data);
	}

	function insert_aspectos($id_tipo){
		$id_tipo=$id_tipo;
		$data['tipo_aspecto']=$this->model_aspectos->get_by_id('tipos_aspectos', $id_tipo);
		$data['nombre']='Aspectos ambientales';
		$data['view']='aspectos/aspectos/insert';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'id_tipo' => $id_tipo,
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'active' => "1"
			);
		$this->model_aspectos->insert('aspectos',$data);
		redirect('aspectos/aspectos_ambientales/'.$id_tipo.'', 'refresh');
		}	
		$this->load->view('template/body', $data);
	}

	public function update_aspectos($id){
		$id=$id;
		$data['aspectos']=$this->model_aspectos->get_by_id('aspectos', $id);
		$data['nombre']='Aspecto ambiental';
		$data['view']='aspectos/aspectos/update';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[120]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required|alpha_dash|max_length[120]');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion')
			);
		$this->model_aspectos->update('aspectos', $data, $id);
		redirect('aspectos/aspectos_ambientales', 'refresh');
		}
		$this->load->view('template/body', $data);
	}

	function delete_aspectos($id){
		$id=$id;
		$this->model_aspectos->delete('aspectos', $id);
		redirect('aspectos/aspectos_ambientales');
	}
}