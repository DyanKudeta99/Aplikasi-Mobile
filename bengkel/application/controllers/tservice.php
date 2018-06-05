<?php 
class tservice extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_tservice');
		$this->load->helper(array('url','form'));
 
	}
 
	function index(){
		$data['harga_service'] = $this->m_tservice->tampil_data()->result();
		$this->load->view('v_tservice',$data);
	}
 
	function tambah(){
		$this->load->view('v_tservice');
	}
 
	function tambah_aksi(){
		$Kode = $this->input->post('Kode_service');
        $Jenis = $this->input->post('Jenis_service');
        $harga = $this->input->post('Harga_service');
        $data = array (
            'Kode_service' => $Kode,
            'Jenis_service' => $Jenis,
            'Harga_service'=> $harga
        );  
		$this->m_tservice->input_data($data,'harga_service');
		redirect('tservice/index');
	}
 
}