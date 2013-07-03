<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_organizacion');
		$this->load->model('model_usuarios');
		$this->is_logged_in();
	}

	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(isset($is_logged_in)&&$is_logged_in===TRUE){
			redirect('sitio');
		}
	}

	public function index(){
		$data['nombre']='Login';
		$data['view'] = 'login/login';

		if($this->input->post('enviar')){
			$correo=$this->input->post('correo');
			$password=$this->input->post('password');
			$user=$this->model_usuarios->get_by_login($correo, md5($password));
			if($user){
				$data=array(
					'username' => $user->nombre,
					'apellido' => $user->apellido,
					'is_logged_in' => true,
					'sexo' =>$user->sexo,
					'id_organizacion'=>$user->id_organizacion,
					'id'=>$user->id,
					'correo'=> $user->email,
					'password'=> $user->password,
					'avatar'=> $user->avatar
				);
				$this->session->set_userdata($data);
				redirect('sitio');
			}
			else{
				$data['error']="Revise su correo y contraseña.";
			}
		}

		$this->load->view('template/body', $data);
	}

		public function insert_organizacion(){
		$data['nombre']='Datos de Organización';
		$data['view']='administracion/organizacion/insert_organizacion';

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
			$id_organizacion=$this->model_organizacion->insert('organizaciones',$organizacion);			
			redirect('login/insert_administrador/'.$id_organizacion.'');			
		}
		$this->load->view('template/body', $data);
	}

		function insert_administrador($id_organizacion){
		$id_organizacion=$id_organizacion;
		$data['organizacion']=$this->model_organizacion->get_by_id('organizaciones', $id_organizacion);
		$data['nombre']='Registro';
		$data['view']='administracion/usuarios/insert_administrador';
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
		$data['id_organizacion']=$id_organizacion;
		$this->model_usuarios->insert('usuarios',$data);
		redirect('login', 'refresh');
		}	
		$this->load->view('template/body', $data);
	}
}