<?php 
class tmekanik extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_tmekanik');
		$this->load->helper(array('url','form'));
 
	}
 
	function index(){
		$data['mekanik'] = $this->m_tmekanik->tampil_data()->result();
		$this->load->view('v_tmekanik',$data);
	}
 
	function tambah(){
		$this->load->view('v_tmekanik');
	}
 
	function tambah_aksi(){
		$id_mekanik = $this->input->post('id_mekanik');
		$nama_mekanik = $this->input->post('nama_mekanik');
		$cp = $this->input->post('cp');
 
		$data = array(
			'id_mekanik' => $id_mekanik,
			'nama_mekanik' => $nama_mekanik,
			'cp' => $harga
			);
		$this->m_tmekanik->input_data($data,'mekanik');
		redirect('tmekanik/index');
	}
 
}