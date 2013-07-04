<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_usuarios');
		$this->load->model('model_organizacion');
		$this->is_logged_in();
	}
	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}
		   													/* ----- U S U A R I O S ----- */
	public function profile_usuario(){
		$id=$this->session->userdata('id');
		$data['usuarios']=$this->model_usuarios->get_by_id('usuarios',$id);
		// print_r($data['usuarios']);
		$data['nombre']='Datos de usuario';
		$data['view']='administracion/usuarios/profile_usuario';
		$this->load->view('template/body', $data);
	}

	function insert_usuario(){
		$data=array('nombre'=>'Registro');
		$data['view']='administracion/usuarios/nuevo_usuario';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha|max_length[120]');
		$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha|max_length[120]');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usuarios.email]');
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[4]|max_length[32]|alpha_dash');
		$this->form_validation->set_rules('password2', 'Confirma tu contraseña', 'trim|required|matches[password]');
		if($this->form_validation->run() != FALSE){
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'sexo' => $this->input->post('sexo'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
			);
		$this->model_usuarios->insert('usuarios',$data);
		redirect('login', 'refresh');
		}
	
		$this->load->view('template/body', $data);
	}

	function update_usuario(){
		$id=$this->session->userdata('id');
		$data=array('nombre'=>'Editar');
		$data['id'] = $this->session->userdata('id');
		$data['name'] = $this->session->userdata('username');
		$data['apellido'] = $this->session->userdata('apellido');
		$data['correo'] = $this->session->userdata('correo');
		$data['avatar'] = $this->session->userdata('avatar');
		$data['view']='administracion/usuarios/update_usuario';
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
				redirect('administracion/profile_usuario');
			}
		}
		$this->load->view('template/body', $data);
	}

	function update_password(){
		$id=$this->session->userdata('id');
		$data=array('nombre'=>'Cambio de contraseña');
		$data['view']='administracion/usuarios/update_password';
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

	 public function update_avatar(){
  		$id=$this->session->userdata('id');
  		$data['name'] = $this->session->userdata('username');
		$data['apellido'] = $this->session->userdata('apellido');
		$data['correo'] = $this->session->userdata('correo');
		$data['avatar'] = $this->session->userdata('avatar');
		if (!$_FILES) {												
			redirect('usuarios/update');
		}
	    if($_FILES['avatar']['error'] == 0){						
	        $config['file_name'] = $id.'_avatar';		
	        $config['upload_path'] = './avatars/';					
	        $config['allowed_types'] = 'jpg';						
	        $config['overwrite'] = true;
	        $this->load->library('upload', $config); 
	        if ( ! $this->upload->do_upload('avatar')){				
	        	$data['error_img']=$this->upload->display_errors();	
		    }
		    
		    else{																				
		        $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;	
		        $config['maintain_ratio'] = TRUE;												
		        $config['width'] = 300; 														
		        $config['height'] = 300; 														
		 
		        $this->load->library('image_lib', $config);												 
		        if ( ! $this->image_lib->resize()){												
		        	$data['error_img']='No se puede redimensionar su imagen, intente con otra';
		        }

		 		$data['success_message']='Avatar Actualizado Correctamente';		
		        $this->model_usuarios->update_avatar($id);		
	        }
	    }
	    else{																								
			$data['error_img']='Ha ocurrido un error al subir el avatar. Código: '.$_FILES['avatar']['error'];	
	    }
	   
	    $data['nombre']='Datos de Organización';
	    $data['view']='administracion/usuarios/update_usuario';
	    $data['usuarios']=$this->model_usuarios->get_by_id('usuarios',$id);
	    
	    $this->load->view('template/body', $data);
	}
											/* ----- O R G A N I Z A C I Ó N ----- */

	public function profile_organizacion(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
		$data['nombre']='Datos de Organización';
		$data['view']='administracion/organizacion/profile_organizacion';
		$this->load->view('template/body', $data);
	}

	public function update_organizacion(){
		$id_organizacion=$this->session->userdata('id_organizacion');
		$data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
		$data['nombre']='Datos de Organización';
		$data['view']='administracion/organizacion/update_organizacion';
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
			redirect('administracion/profile_organizacion');
			}
		
		$this->load->view('template/body', $data);
	}



	public function update_logo(){
  		$id_organizacion=$this->session->userdata('id_organizacion');
		if (!$_FILES) {												//Para que no entre a la función si no se selecciona archivo
			redirect('administracion/update_organizacion');
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
	    $data['view']='administracion/organizacion/update_organizacion';
	    $data['organizaciones']=$this->model_organizacion->get_by_id('organizaciones',$id_organizacion);
	    $this->load->view('template/body', $data);
	}

}