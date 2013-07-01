<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_usuarios');
		//$this->is_logged_in();
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

	

		function nuevo_registro(){
		$data=array('nombre'=>'Registro');
		$data['view']='forms/nuevo_registro';
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

}