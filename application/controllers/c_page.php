<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct(){
	    parent:: __construct();
	    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  	}

	public function index(){
        if($this->session->userdata('akses') == 1){
            $this->load->view('admin/v_dashboard');
        }
        else if($this->session->userdata('akses') == 2){
            $this->load->view('v_input');
        }
	}
}