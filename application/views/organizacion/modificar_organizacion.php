<?php
$is_logged_in=$this->session->userdata('is_logged_in');
	if(!isset($is_logged_in)|| $is_logged_in!=TRUE){
			redirect('login');
	}

$this->load->view('organizacion/edit_organizacion.php');

?>