<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitio extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	public function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
		}
	}
	function logout(){
		$this->session->sess_destroy();  
	    redirect('login'); 
	}

	public function index(){
		$data['nombre']='Home';

		if($this->session->userdata('sexo')=='M'){
			$data['welcome']='Bienvenida '.$this->session->userdata('username');
		}
		else{
			$data['welcome']='Bienvenido '.$this->session->userdata('username');
		}

		$data['view'] = 'home/home';
		$this->load->view('template/body', $data);
	}

}