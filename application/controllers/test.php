<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_metas');
		$this->load->model('model_eventos');
		//$this->is_logged_in();
	}

	function index(){
		$data['nombre']='Hola mundo';
		$data['view'] = 'demo/hello';
		$this->load->view('template/body', $data);
	}

	public function calendar_metas(){
		$id_estrategia=1;
		$data['nombre']='Calendario metas';
		$data['view'] = 'calendario/metas';
		
		$metas=$this->model_metas->get_by_estrategia($id_estrategia);
		$data['metas']=array();
		foreach ($metas as $meta) {
			array_push($data['metas'],
				array(
					'id'=>$meta->id,
					'title'=>$meta->nombre,
					'start'=>$meta->fecha_meta
				)
			);
		}
		
		$this->load->view('template/body', $data);
	}

	public function calendar_eventos(){
		$id_estrategia=1;
		$data['nombre']='Calendario eventos';
		$data['view'] = 'calendario/eventos';
		
		$eventos=$this->model_eventos->get_by_estrategia($id_estrategia);
		$data['eventos']=array();
		foreach ($eventos as $meta) {
			array_push($data['eventos'],
				array(
					'id'=>$meta->id,
					'title'=>$meta->nombre,
					'start'=>$meta->fecha_evento
				)
			);
		}
		
		$this->load->view('template/body', $data);
	}



}