<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct(){
	  parent:: __construct();
	  $this->load->model('m_login');
  	}

	public function index(){
		$this->load->view('index');
	}
	
	public function auth(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek = $this->m_login->auth($username, md5($password));

		if($cek->num_rows() > 0){
			$data=$cek_dosen->row_array();
			$this->session->set_userdata('masuk',TRUE);
			
			$this->session->set_userdata('akses','1');
			$this->session->set_userdata('ses_username',$data['username']);

			redirect(base_url().'index.php/c_crud/lihat_data');
        }
	}

	public function create(){
		$username	= htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password	= htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$level		= $_POST['level'];
		$password	= md5($password);
		
		$data = array(
			'username'	=> 	$username,
			'password'	=>	$password,
			'level'		=>	$level,
		);

		$this->db->insert('user', $data);
		redirect();
	}

	public function logout(){
		$this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
	}
}