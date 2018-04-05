<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	$values['ses_name'] = $this->session->userdata('ses_username');
	

	$this->load->view('templates/header',@$values);
	$this->load->view($view,@$values);
	$this->load->view('templates/footer',@$values);
?>
