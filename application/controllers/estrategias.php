<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estrategias extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->is_logged_in();

        $this->load->model('model_usuarios');
        $this->load->model('model_estrategias');
        $this->load->model('model_widgets');
        $this->load->model('model_texts');
        $this->load->model('model_checks');
        $this->load->model('model_comentarios');
       	$this->load->model('model_metas');
	}
	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}

	public function index(){

	}

	public function single($id_estrategia){
		$user=$this->model_usuarios->get_by_id('usuarios',$this->session->userdata('id'));
		
		$estrategia=$this->model_estrategias->get_by_id("estrategias",$id_estrategia);
		if(!$estrategia){
			show_404();
		}
		
		$data['widgets']=$this->model_widgets->get_all_by_estrategia($id_estrategia);

		if($data['widgets']){
			foreach ($data['widgets'] as $widget) {
				switch ($widget->tipo) {
					case 'text':
						$widget->rows=$this->model_texts->get_all_by_widget($widget->id);
						break;
					case 'check':
						$widget->rows=$this->model_checks->get_all_by_widget($widget->id);
						break;
					case 'comentario':
						$widget->rows=$this->model_comentarios->get_all_by_widget($widget->id);

						break;
					case 'meta':
						$widget->rows=$this->model_metas->get_all_by_widget($widget->id);
						break;
					default:
						# code...
						break;
				}
			}
		}

		$data['estrategia']=$estrategia;
		$data['user']=$user;
		$data['nombre']=$estrategia[0]->nombre;
		$data['view']='estrategias/single';
		$data['title']='Objetivo';
		$this->load->view('template/body',$data);
	}

	public function update_text($id_estrategia){
		if($this->input->post('edit-text')){
			$nombre_w=$this->input->post('nombre_w');
			$id_w=$this->input->post('id_w');
			$id_t=$this->input->post('id_t');
			$desc_t=$this->input->post('descripcion_t');

			$data=array(
				'nombre'=>$nombre_w
			);
			$this->model_widgets->update('widget_obj',$data,$id_w);

			$data=array(
				'descripcion'=>$desc_t
			);
			
			$this->model_texts->update('text',$data,$id_t);
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function edit_checklist(){
		if($this->input->post('edit-check')){
			$id_estrategia=$this->input->post('id_estrategia');
			$ids=$this->input->post('id');
			$id_w=$this->input->post('id_w');
			$status=$this->input->post('status');
			foreach ($this->input->post('cuerpo') as $i=>$cuerpo) {
				if(isset($ids[$i])){
					if (isset($status[$ids[$i]])) {
						$data=array('cuerpo'=>$cuerpo,'status'=>1);;
					}
					else{
						$data=array('cuerpo'=>$cuerpo,'status'=>0);;
					}
					$this->model_checks->update('checklist',$data,$ids[$i]);
				}
				else{
					$data=array(
						'cuerpo'=>$cuerpo,
						'status'=>0,
						'id_widget'=>$id_w,
						'creado'=>date('Y-m-d H:i:s')
					);
					$this->model_checks->insert('checklist',$data);
				}
			}
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function add_comment($id_estrategia){
		if($this->input->post('add_comment')){
			$id_w=$this->input->post('id_w');
			$id_u=$this->input->post('id_usuario');
			$cuerpo=$this->input->post('cuerpo');

			$data=array(
				'cuerpo'=>$cuerpo,
				'id_widget'=>$id_w,
				'creado'=>date('Y-m-d H:i:s'),
				'id_usuario'=>$id_u
			);

			$this->model_texts->insert('comentarios',$data);
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function edit_comment($id_estrategia){
		if($this->input->post('edit-comentario')){
			$id_comment=$this->input->post('id_c');
			$cuerpo=$this->input->post('cuerpo');
			$data=array(
					'cuerpo'=>$cuerpo,
			);
			$this->model_comentarios->update('comentarios',$data,$id_comment);
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function delete_comment($id_comentario,$id_estrategia){
		$data=array(
			'id'=>$id_comentario
		);
		$this->model_comentarios->delete($data);
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function delete_check($id_check,$id_estrategia){
		$data=array('id'=>$id_check);
		$this->model_checks->delete_c($data);
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

}