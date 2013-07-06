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
       	$this->load->model('model_eventos');
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

		/*Alta widget meta*/
		$this->load->library('form_validation');
		if($this->input->post('nva_meta')){
			$config=array(
				array(
                 'field'   => 'widget_nombre',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run()){

				$widget=array(
					'nombre'=>$this->input->post('widget_nombre'),
					'tipo'=>'meta',
					'creado'=>date('Y-m-d H:i:s'),
					'id_estrategia'=>$this->input->post('id_estrategia')
				);
				
				
				$config=array(
					array(
	                 'field'   => 'nombre',
	                 'label'   => 'Nombre de la meta',
	                 'rules'   => 'required'
	                ),
	                array(
	                 'field'   => 'edo_inicial',
	                 'label'   => 'Estado inicial',
	                 'rules'   => 'required'
	                ),
	                array(
	                 'field'   => 'edo_meta',
	                 'label'   => 'Estado meta',
	                 'rules'   => 'required'
	                ),
	                array(
	                 'field'   => 'fecha_meta',
	                 'label'   => 'Fecha de la meta',
	                 'rules'   => 'required'
	                )
				);
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()){
					$id_w=$this->model_widgets->insert_w($widget);
                	$meta=array(
						'id_widget'=>$id_w,
						'id_estrategia'=>$this->input->post('id_estrategia'),
						'nombre'=>$this->input->post('nombre'),
						'descripcion'=>$this->input->post('descripcion'),
						'fecha_meta'=>$this->input->post('fecha_meta'),
						'edo_inicial'=>$this->input->post('edo_inicial'),
						'edo_actual'=>$this->input->post('edo_inicial'),
						'edo_meta'=>$this->input->post('edo_meta'),
						'creada'=>date('Y-m-d H:i:s'),
					);
					$this->model_metas->insert('metas',$meta);
					$data['success']="Widget de metas agregado";
                }

			}

		}
		/*Validacion para W texto*/
		if($this->input->post('add_texto')){
			$config=array(
				array(
                 'field'   => 'widget_nombre',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'descripcion',
                 'label'   => 'Cuerpo del texto',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
            if($this->form_validation->run()){
            	$widget=array(
					'nombre'=>$this->input->post('widget_nombre'),
					'tipo'=>'text',
					'creado'=>date('Y-m-d H:i:s'),
					'id_estrategia'=>$this->input->post('id_estrategia')
				);
				$id_w=$this->model_widgets->insert_w($widget);
				$text=array(
					'id_widget'=>$id_w,
					'descripcion'=>$this->input->post('descripcion'),
					'creado'=>date('Y-m-d H:i:s'),
				);
				$this->model_texts->insert('text',$text);
				$data['success']='Widget de texto agregado';
            }

		}
		/*Validacion para W comentarios*/
		if($this->input->post('add_comentarios')){
			$config=array(
				array(
                 'field'   => 'widget_nombre',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'cuerpo',
                 'label'   => 'Cuerpo del comentario',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
            if($this->form_validation->run()){
            	$widget=array(
					'nombre'=>$this->input->post('widget_nombre'),
					'tipo'=>'comentario',
					'creado'=>date('Y-m-d H:i:s'),
					'id_estrategia'=>$this->input->post('id_estrategia')
				);
				$id_w=$this->model_widgets->insert_w($widget);
				$comentario=array(
					'id_widget'=>$id_w,
					'cuerpo'=>$this->input->post('cuerpo'),
					'id_usuario'=>$this->input->post('id_usuario'),
					'creado'=>date('Y-m-d H:i:s'),
				);
				$this->model_texts->insert('comentarios',$comentario);
				$data['success']='Widget de comentarios agregado';
            }
		}
		/*Validacion para W eventos*/
		if($this->input->post('add_evento')){
			$config=array(
				array(
                 'field'   => 'nombre_w',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'nombre',
                 'label'   => 'Nombre del evento',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'fecha_evento',
                 'label'   => 'Fecha del evento',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
            if($this->form_validation->run()){
            	$widget=array(
					'nombre'=>$this->input->post('nombre_w'),
					'tipo'=>'evento',
					'creado'=>date('Y-m-d H:i:s'),
					'id_estrategia'=>$this->input->post('id_estrategia')
				);
				$id_w=$this->model_widgets->insert_w($widget);
				$evento=array(
					'id_widget'=>$id_w,
					'nombre'=>$this->input->post('nombre'),
					'id_estrategia'=>$this->input->post('id_estrategia'),
					'descripcion'=>$this->input->post('descripcion'),
					'fecha_evento'=>$this->input->post('fecha_evento'),
					'created'=>date('Y-m-d H:i:s')
				);
				$this->model_texts->insert('eventos',$evento);
				$data['success']='Widget de eventos agregado';
            }
		}
		/*Validacion para W checklist*/
		if($this->input->post('add_check')){
			$config=array(
				array(
                 'field'   => 'nombre_w',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'cuerpo[]',
                 'label'   => 'Nombre del evento',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
            if($this->form_validation->run()){
            	$widget=array(
					'nombre'=>$this->input->post('nombre_w'),
					'tipo'=>'check',
					'creado'=>date('Y-m-d H:i:s'),
					'id_estrategia'=>$this->input->post('id_estrategia')
				);
				$id_w=$this->model_widgets->insert_w($widget);
				$cuerpos=$this->input->post('cuerpo');
				foreach ($cuerpos as $key => $cuerpo) {
					$check=array(
						'cuerpo'=>$cuerpo,
						'creado'=>date('Y-m-d H:i:s'),
						'id_widget'=>$id_w
					);
					$this->model_checks->insert('checklist',$check);
					$data['success']='Widget de checklist agregado';
				}
            }
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
					case 'evento':
						$evs=$this->model_eventos->get_all_by_widget($widget->id);
						$widget->evs=$evs;
						$widget->rows=array();
						foreach ($evs as $event) {
							array_push($widget->rows,
								array(
									'id'=>$event->id,
									'title'=>$event->nombre,
									'start'=>$event->fecha_evento
								)
							);
						}
						
						break;
					default:
						$data['control']=$widget;
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

	public function add_evento(){
		if(!$this->input->post('id_estrategia')){
			show_404();
		}
		$id_estrategia=$this->input->post('id_estrategia');
		if($this->input->post('add_evento')){
			$this->load->library('form_validation');
			$config=array(
                array(
                 'field'   => 'nombre',
                 'label'   => 'Nombre del evento',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'fecha_evento',
                 'label'   => 'Fecha del evento',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
            if($this->form_validation->run()){
            	$evento=array(
					'id_widget'=>$this->input->post('id_w'),
					'nombre'=>$this->input->post('nombre'),
					'id_estrategia'=>$id_estrategia,
					'descripcion'=>$this->input->post('descripcion'),
					'fecha_evento'=>$this->input->post('fecha_evento'),
					'created'=>date('Y-m-d H:i:s')
				);
				$this->model_texts->insert('eventos',$evento);
            }
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function add_meta(){
		if(!$this->input->post('id_estrategia')){
			show_404();
		}
		$id_estrategia=$this->input->post('id_estrategia');
		if($this->input->post('nva_meta')){
			$this->load->library('form_validation');
			$config=array(
				array(
                 'field'   => 'nombre',
                 'label'   => 'Nombre de la meta',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'edo_inicial',
                 'label'   => 'Estado inicial',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'edo_meta',
                 'label'   => 'Estado meta',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'fecha_meta',
                 'label'   => 'Fecha de la meta',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
			if($this->form_validation->run()){
				$meta=array(
					'id_widget'=>$this->input->post('id_w'),
					'id_estrategia'=>$id_estrategia,
					'nombre'=>$this->input->post('nombre'),
					'descripcion'=>$this->input->post('descripcion'),
					'fecha_meta'=>$this->input->post('fecha_meta'),
					'edo_inicial'=>$this->input->post('edo_inicial'),
					'edo_actual'=>$this->input->post('edo_inicial'),
					'edo_meta'=>$this->input->post('edo_meta'),
					'creada'=>date('Y-m-d H:i:s'),
				);
				$this->model_metas->insert('metas',$meta);
			}
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function delete_evento($id_evento,$id_estrategia){
		$data=array('id'=>$id_evento);
		$this->model_eventos->delete_e($data);
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function edit_eventos(){
		if(!$this->input->post('id_estrategia')){
			show_404();
		}
		$id_estrategia=$this->input->post('id_estrategia');

		if($this->input->post('editar_eventos')){
			$this->load->library('form_validation');
			$config=array(
				array(
                 'field'   => 'nombre_w',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'nombre[]',
                 'label'   => 'Nombre',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'fecha_evento[]',
                 'label'   => 'Fecha del evento',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
			if($this->form_validation->run()){
				$nombres=$this->input->post('nombre');
				$fechas=$this->input->post('fecha_evento');
				$id_w=$this->input->post('id_w');
				$widget=array(
					'nombre'=>$this->input->post('nombre_w'),
				);
				$this->model_widgets->update('widget_obj',$widget,$id_w);

				foreach ($nombres as $key => $nombre) {
					$evento=array('nombre'=>$nombre, 'fecha_evento'=>$fechas[$key]);
					$this->model_metas->update('eventos',$evento,$key);
				}
			}
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
	}

	public function edit_metas(){
		if(!$this->input->post('id_estrategia')){
			show_404();
		}
		$id_estrategia=$this->input->post('id_estrategia');

		if($this->input->post('editar_metas')){
			$this->load->library('form_validation');
			$config=array(
				array(
                 'field'   => 'nombre_w',
                 'label'   => 'Nombre del widget',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'edo_actual[]',
                 'label'   => 'Estado actual',
                 'rules'   => 'required'
                ),
                array(
                 'field'   => 'fecha_meta[]',
                 'label'   => 'Fecha de la meta',
                 'rules'   => 'required'
                )
			);
			$this->form_validation->set_rules($config);
			if($this->form_validation->run()){
				$edo_actual=$this->input->post('edo_actual');
				$fecha_meta=$this->input->post('fecha_meta');
				$id_w=$this->input->post('id_w');
				$widget=array(
					'nombre'=>$this->input->post('nombre_w'),
				);
				$this->model_widgets->update('widget_obj',$widget,$id_w);
				foreach ($edo_actual as $key => $estado) {
					$meta=array('edo_actual'=>$estado, 'fecha_meta'=>$fecha_meta[$key]);
					$this->model_metas->update('metas',$meta,$key);
				}
			}
		}
		redirect('estrategias/single/'.$id_estrategia, 'refresh');
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