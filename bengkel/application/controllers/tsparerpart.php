<?php 
class tsparepart extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_tsparepart');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['sparepart'] = $this->m_tsparepart->tampil_data()->result();
		$this->load->view('v_tsparepart',$data);
	}
 
	function tambah(){
		$this->load->view('v_tsparepart');
	}
 
	function tambah_aksi(){
		$kode = $this->input->post('kode_sparepart');
		$nama = $this->input->post('nama_sparepart');
		$harga = $this->input->post('harga_sparepart');
 
		$data = array(
			'kode_sparepart' => $kode,
			'nama_sparepart' => $nama,
			'harga_sparepart' => $harga
			);
		$this->m_tsparepart->input_data($data,'sparepart');
		redirect('tsparepart/index');
	}
 
}