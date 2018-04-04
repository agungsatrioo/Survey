<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {

	public function __construct(){
      parent:: __construct();
  	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{

		$nama 			= $_POST['nama'];
		$umur			= $_POST['umur'];
		$jk 			= $_POST['jk'];
		$pt 			= $_POST['pt'];
		$pu 			= $_POST['pu'];
		$pe 			= $_POST['pe'];
		$kesesuaian 	= $_POST['kesesuaian'];
		$kejelasan 		= $_POST['kejelasan'];
		$kedisiplinan 	= $_POST['kedisiplinan'];
		$petugas 		= $_POST['petugas'];
		$pelayanan 		= $_POST['pelayanan'];
		$kecepatan 		= $_POST['kecepatan'];
		$keadilan 		= $_POST['keadilan'];
		$kesopanan 		= $_POST['kesopanan'];
		$kewajaran 		= $_POST['kewajaran'];
		$kesesuaian2 	= $_POST['kesesuaian2'];
		$ketepatan 		= $_POST['ketepatan'];
		$kenyamanan 	= $_POST['kenyamanan'];
		$keamanan 		= $_POST['keamanan'];

		$data = array(
			'nama' 		=> $nama,
			'umur'		=> $umur,
			'jk' 		=> $jk,
			'pt' 		=> $pt,
			'pu' 		=> $pu,
			'mudah' 	=> $pe,
			'sesuai' 	=> $kesesuaian,
			'pasti' 	=> $kejelasan,
			'disiplin' 	=> $kedisiplinan,
			'petugas' 	=> $petugas,
			'mampu' 	=> $pelayanan,
			'cepat' 	=> $kecepatan,
			'adil' 		=> $keadilan,
			'sopan' 	=> $kesopanan,
			'wajar' 	=> $kewajaran,
			'sesuai2' 	=> $kesesuaian2,
			'tepat' 	=> $ketepatan,
			'nyaman' 	=> $kenyamanan,
			'aman' 		=> $keamanan,
		);

		$this->db->insert('survey', $data);
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function lihat_data()
	{
		$this->load->model('Model');
		$data	= $this->Model->select();
		$data2	= $this->db->count_all('survey');
		$nilai	= $this->Model->jumlahdata();
		
		$this->load->view('templates/header');
		$this->load->view('dashboard',array('data' => $data, 'data2' => $data2, 'nilai' => $nilai));
		$this->load->view('templates/footer');
	}

	public function detail_data(){
		$id = $this->uri->segment(3);
		
		$this->load->model('Model');
		$data = $this->Model->select_where($id);
		$nilai = $this->Model->jumlahdata_where($id);

		$this->load->view('templates/header');
		$this->load->view('detail',array('data' => $data, 'nilai' => $nilai));
		$this->load->view('templates/footer');
	}

	public function delete_data(){
		$id = $this->uri->segment(3);
		
		$this->load->model('Model');
		$this->Model->delete_where($id);
		$data = $this->Model->select();

		redirect(base_url().'index.php/crud/lihat_data');
	}

	public function export_data(){
		$this->load->dbutil();
		$query = $this->db->query("SELECT nama,umur,jk,pt,pu,mudah,sesuai,pasti,disiplin,petugas,mampu,cepat,adil,sopan,wajar,sesuai2,tepat,nyaman,aman FROM survey");
		header("Content-type: application/xls");
		header("Content-Disposition: attachment; filename='Data.xls'");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $this->dbutil->csv_from_result($query);
	}
}