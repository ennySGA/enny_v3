<?php 
	$this->load->view('template/header',$data=array('nombre'=>$nombre));
	$this->load->view($view);
	$this->load->view('template/footer');
 ?>