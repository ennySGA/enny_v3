<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('model_usuarios');
	}

	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}

	function update(){
		$id=$this->session->userdata('id');
		$data=array('nombre'=>'Editar');
		$data['id'] = $this->session->userdata('id');
		$data['name'] = $this->session->userdata('username');
		$data['apellido'] = $this->session->userdata('apellido');
		$data['correo'] = $this->session->userdata('correo');
		$data['avatar'] = $this->session->userdata('avatar');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha|max_length[120]');
		$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha|max_length[120]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|edit_unique[usuarios.email.'.$id.']');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'email' => $this->input->post('email'),
			);
		$this->model_usuarios->update('usuarios', $data, $id);
		$user=$this->model_usuarios->get_by_id('usuarios', $id);
			if($user){
				$data=array(
					'username' => $user->nombre,
					'apellido' => $user->apellido,
					'correo'=> $user->email
				);
				$this->session->set_userdata($data);
				redirect('sitio');
			}
		}
		
		$data['view']='forms/update_registro';
		$this->load->view('template/body', $data);
	}

	function update_password(){
		$id=$this->session->userdata('id');
		$data=array('nombre'=>'Cambio de contraseña');
		$data['view']='forms/update_password';
		if($this->input->post('enviar')){
			$password=$this->input->post('passwordactual');
			$user=$this->model_usuarios->get_by_password($id, md5($password));
			if($user){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('password', 'Nueva contraseña', 'trim|required|alpha_dash|min_length[4]|max_length[32]');
				$this->form_validation->set_rules('password2', 'Confirma tu nueva contraseña', 'trim|required|matches[password]');
				if($this->form_validation->run() != FALSE){
					$data = array( 'password' => md5($this->input->post('password')));
					$this->model_usuarios->update('usuarios', $data, $id);
					redirect('sitio');
				}
				
			} 

		}
		$this->load->view('template/body', $data);
	}

	public function edit_avatar(){
  		$id=$this->session->userdata('id');
  		$data['name'] = $this->session->userdata('username');
		$data['apellido'] = $this->session->userdata('apellido');
		$data['correo'] = $this->session->userdata('correo');
		$data['avatar'] = $this->session->userdata('avatar');
		if (!$_FILES) {												//Para que no entre a la función si no se selecciona archivo
			redirect('usuarios/update');
		}
	    if($_FILES['avatar']['error'] == 0){							//si no marcó error al subir el archivo
	        //Configuración del archivo que se sube
	        $config['file_name'] = $id.'_avatar';		//se renombra el archivo. Ejemplo: 1_avatar.jpg
	        $config['upload_path'] = './avatars/';					//Localización donde se va a guardar el avatar
	        $config['allowed_types'] = 'jpg';						//Tipo de archivo aceptado.
	        $config['overwrite'] = true;							//Sobreescritura del archivo en caso de que exista
	        //$config['max_size']= '100';							// Tamaño en KB si se requiere.
	 
	        $this->load->library('upload', $config); 				//Librería para subir archivo y llamada a la función
	 
	        if ( ! $this->upload->do_upload('avatar')){				//si marca error...
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

		 		$data['success_message']='Avatar Actualizado Correctamente';		//Cuando todo está bien pone el mensaje de success
		        $this->model_usuarios->update_avatar($id);		//Sube el path a la base de datos con el método update_avatar definido en el modelo
	        }
	    }
	    
	    else{																								//Si no puede subir la imagen...
			$data['error_img']='Ha ocurrido un error al subir el avatar. Código: '.$_FILES['avatar']['error'];	//..aquí pone error y lanza el código del error (checar documentación de $_FILES)
	    }
	    //Carga la vista
	    $data['nombre']='Datos de Organización';
	    $data['view']='forms/update_registro';
	    $data['usuarios']=$this->model_usuarios->get_by_id('usuarios',$id);
	    print_r($data['usuarios']);
	    $this->load->view('template/body', $data);
	}

	
}
