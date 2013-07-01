<?php 
class programas extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('programasModel');
		$this->load->model('objetivosModel');
		$this->load->model('metasModel');
		$this->load->library('upload');


	}

	function index(){
		$data['nombre']='Programas';
		$data['programas'] = $this->programasModel->getAll();
		
		$empresa_id='1';
		$data['datos_tabla']=$this->programasModel->getTablaAvance($empresa_id);

		$data['view'] ='programas/programas';
		$this->load->view('template/body', $data);
	}

	function nuevoPrograma(){
		//$this->load->view('programas/nuevo');
		$data['nombre']='Programas';
		$data['view'] ='programas/nuevo';
		$this->load->view('template/body', $data);
	}

	function addPrograma(){
		$guardar = $this->input->post('guardar');

		if($guardar){
			#form_validation here
			
			$data = array(
				'nombre' => $this->input->post('nombre'),
				'descripcion' => $this->input->post('descripcion'),
				'activo' => 1
				);
			
			$id = $this->programasModel->insertPrograma($data);
			$this->load->library('upload');
			$files = $_FILES;

			if($this->sube_imagen($files, $id, $data)){
				$data['programas'] = $this->programasModel->getAll();
				//$this->load->view('programas/programas', $data);
				$data['nombre']='Programas';
				$data['view'] ='programas/programas';
				$this->load->view('template/body', $data);
				//echo "si sube";
				redirect('programas/programas', 'refresh');

			}else{
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('programas/programas', $error);
				$data['nombre']='Programas';
				$data['view'] ='programas/programas';
				$this->load->view('template/body', $data);
				//echo "No sube wey";
			}

		}// end if guardar
		
		else{
			//$this->load->view('programas/progrmas');
			$data['nombre']='Programas';
			$data['view'] ='programas/programas';
			$this->load->view('template/body', $data);
		}
	}//end addPrograma

	function sube_imagen($files, $id, $data){
		$_FILES['userfile']['name']= $files['userfile']['name'][0];
	    $_FILES['userfile']['type']= $files['userfile']['type'][0];
	    $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][0];
	    $_FILES['userfile']['error']= $files['userfile']['error'][0];
	    $_FILES['userfile']['size']= $files['userfile']['size'][0];

	    if($files['userfile']['size'][0] != 0){
	    	$nom = $files['userfile']['name'][0];
	    	$ext = end(explode('.',$nom));
	    	var_dump($ext);
	    	$nombre = 'imagen_programa_'.$id;
	    	$imagen = 'imagen_programa_'.$id.'.'.$ext;
	    	$data['imagen'] = $imagen;
	    	$data['id'] = $id;

	    	$this->upload->initialize($this->set_upload_options($nombre));
	    
	    	//$data = array('upload_data' => $this->upload->data());
			    
			if($this->upload->do_upload()){
			 	$imagen = $nombre.'.'.$ext;
				//echo "si se sube";
				$this->programasModel->updatePrograma($data);
				
				$valor = TRUE;

			}else{
				//echo "no se sube";
				$valor = FALSE;
				}

	    }
	    return $valor;
	}

	private function set_upload_options($name){   
	    $config = array();
	    
	    $config['upload_path'] = './uploads';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	    $config['max_size']      = '2048';
	    $config['file_name'] = $name;
	    $config['overwrite']     = TRUE;

	    return $config;
	}

	function ver(){
		$id=$this->uri->segment(3);
		$data['programas'] = $this->programasModel->getById($id);
		$data['objetivos'] = $this->objetivosModel->getByProgramaId($id);
		
		/*DATOS PARA EL AVANCE DE OBJETIVOS*/
		$data['datos_tabla']=$this->objetivosModel->getDatosTablaByPrograma($id);
		
		$data['nombre']='Programas';
		$data['view'] ='programas/ver';
		$this->load->view('template/template', $data);

	}

	function eliminar(){
		$id = $this->uri->segment(3);
		$data['activo'] = 0;
		$data['id'] = $id;
		$this->programasModel->deletePrograma($data);
		redirect('programas/programas', 'refresh');
	}

	function editar(){
		$guardar = $this->input->post('guardar');
		if($guardar){
			$data['id'] = $this->input->post('id');
			$data['nombre'] = $this->input->post('nombre');
			$data['descripcion'] = $this->input->post('descripcion');
			$data['imagen'] = '';
			
			$this->programasModel->updatePrograma($data);

			$id = $data['id'];

			$this->load->library('upload');
			$files = $_FILES;

			if($this->sube_imagen($files, $id, $data)){
				$data['programas'] = $this->programasModel->getAll();
				//$this->load->view('programas/programas', $data);
				$data['nombre']='Programas';
				$data['view'] ='programas/programas';
				$this->load->view('template/body', $data);
				//echo "si sube";
				//redirect('programas/programas', 'refresh');

			}else{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('programas/programas', $error);
				//echo "No sube wey";
			}

		redirect('programas/programas', 'refresh');


		}else{
			$id = $this->uri->segment(3);
			$programaData = $this->programasModel->getById($id);
			$data['nombre']='Programas';
			$data['view'] = 'programas/editar';
			$data['nombre'] = $programaData[0]->nombre;
			$data['descripcion'] = $programaData[0]->descripcion;
			$this->load->view('template/template', $data);
		}

	}
	
}
 ?>