<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizacion extends CI_Controller{

function __construct(){
 	parent::__construct();
	$this->load->model('model_organizacion');
	//$this->is_logged_in();
 }

	public function index(){
		$data['nombre']='Datos de Organización';
		$data['view']='organizacion/ver_organizacion';
		//$id=3;
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
		$this->load->view('template/body', $data);
	}

	public function registrar(){
		$data['nombre']='Datos de Organización';
		$data['view']='organizacion/registrar_organizacion';

		$this->load->library('form_validation');
		$config=array(
				array(
                     'field'   => 'nombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required|max_length[120]|is_unique[organizaciones.nombre]'
                 	),
                
                array(
                     'field'   => 'direccion',
                     'label'   => 'Dirección',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'colonia',
                     'label'   => 'Colonia',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'cp',
                     'label'   => 'CP',
                     'rules'   => 'trim|required|exact_length[5]|numeric'
					),
                
                array(
                     'field'   => 'ciudad_estado',
                     'label'   => 'Ciudad/Estado',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'giro',
                     'label'   => 'Giro',
                     'rules'   => 'trim|required|max_length[120]'
					)

			);
		$this->form_validation->set_rules($config); 

		if($this->form_validation->run()){
			$data['success_message']="Registro realizado";

			$nombre=$this->input->post('nombre');
			$direccion=$this->input->post('direccion');
			$colonia=$this->input->post('colonia');
			$cp=$this->input->post('cp');
			$ciudad_estado=$this->input->post('ciudad_estado');
			$giro=$this->input->post('giro');
			$tamano=$this->input->post('tamano');
			
			$organizacion= array(
			'nombre'=>$nombre,
			'direccion'=>$direccion,
			'colonia'=>$colonia,
			'cp'=>$cp,
			'ciudad_estado'=>$ciudad_estado,
			'giro'=>$giro,
			'tamano'=>$tamano

			);
			$this->model_organizacion->insert('organizaciones',$organizacion);
			
		}
		$this->load->view('template/body', $data);
	}




	public function modificar(){
		$data['nombre']='Datos de Organización';
		$data['view']='organizacion/modificar_organizacion';
		//$id=3;
		$id_organizacion=$this->session->userdata('id_organizacion');
		//empieza validacion del formulario
		$this->load->library('form_validation');
		$config=array(
				array(
                     'field'   => 'nombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required|max_length[120]'
                 	),
                
                array(
                     'field'   => 'direccion',
                     'label'   => 'Dirección',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'colonia',
                     'label'   => 'Colonia',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'cp',
                     'label'   => 'CP',
                     'rules'   => 'trim|required|exact_length[5]|numeric'
					),
                
                array(
                     'field'   => 'ciudad_estado',
                     'label'   => 'Ciudad/Estado',
                     'rules'   => 'trim|required|max_length[120]'
					),
                
                array(
                     'field'   => 'giro',
                     'label'   => 'Giro',
                     'rules'   => 'trim|required|max_length[120]'
					)

			);
		$this->form_validation->set_rules($config); 
		if($this->form_validation->run()){
			$data['success_message']="Modificación de datos realizada correctamente";
			$nombre=$this->input->post('nombre');
			$direccion=$this->input->post('direccion');
			$colonia=$this->input->post('colonia');
			$cp=$this->input->post('cp');
			$ciudad_estado=$this->input->post('ciudad_estado');
			$giro=$this->input->post('giro');
			$tamano=$this->input->post('tamano');
			$organizacion= array(
			'nombre'=>$nombre,
			'direccion'=>$direccion,
			'colonia'=>$colonia,
			'cp'=>$cp,
			'ciudad_estado'=>$ciudad_estado,
			'giro'=>$giro,
			'tamano'=>$tamano
			);

			$this->model_organizacion->update('organizaciones',$organizacion,$id_organizacion);
			}
		
		$data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
		$this->load->view('template/body', $data);
	}



	public function edit_logo(){
  		$id_organizacion=$this->session->userdata('id_organizacion');
		if (!$_FILES) {												//Para que no entre a la función si no se selecciona archivo
			redirect('organizacion/modificar');
		}
	    if($_FILES['logo']['error'] == 0){							//si no marcó error al subir el archivo
	        //Configuración del archivo que se sube
	        $config['file_name'] = $id_organizacion.'_logo';		//se renombra el archivo. Ejemplo: 1_logo.jpg
	        $config['upload_path'] = './logos/';					//Localización donde se va a guardar el logo
	        $config['allowed_types'] = 'jpg';						//Tipo de archivo aceptado.
	        $config['overwrite'] = true;							//Sobreescritura del archivo en caso de que exista
	        //$config['max_size']= '100';							// Tamaño en KB si se requiere.
	 
	        $this->load->library('upload', $config); 				//Librería para subir archivo y llamada a la función
	 
	        if ( ! $this->upload->do_upload('logo')){				//si marca error...
	        	$data['error_img']=$this->upload->display_errors();	//... los asigna a esta variabla para ser desplegados
		    }
		    
		    else{																				//Si no marca error
		    	//Redimensiona la imagen
		        $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;	//Ubicación de la imagen que se subió
		        $config['maintain_ratio'] = TRUE;												//Mantiene las dimensiones proporcionales
		        $config['width'] = 300; 														//Parametro de redimensión
		        $config['height'] = 300; 														//Parametro de redimensión
		 
		        $this->load->library('image_lib', $config);										//Librería para redimensionar y llamada a la funciób
		 
		        if ( ! $this->image_lib->resize()){												//si no puede redimensionar...
		        	$data['error_img']='No se puede redimensionar su imagen, intente con otra';	//...aquí pone el error
		        }

		 		$data['success_message']='Logo Actualizado Correctamente';		//Cuando todo está bien pone el mensaje de success
		        $this->model_organizacion->update_logo($id_organizacion);		//Sube el path a la base de datos con el método update_logo definido en el modelo
	        }
	    }
	    
	    else{																								//Si no puede subir la imagen...
			$data['error_img']='Ha ocurrido un error al subir el logo. Código: '.$_FILES['logo']['error'];	//..aquí pone error y lanza el código del error (checar documentación de $_FILES)
	    }
	    //Carga la vista
	    $data['nombre']='Datos de Organización';
	    $data['view']='organizacion/modificar_organizacion';
	    $data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
	    $this->load->view('template/body', $data);
	}

}