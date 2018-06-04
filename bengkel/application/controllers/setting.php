<?php 
class setting extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_setting');
		$this->load->helper(array('url','form'));
 
	}
 
	function index(){
		$data['admin'] = $this->m_setting->tampil_data()->result();
		$this->load->view('v_setting',$data);
	}
 
	function tambah(){
		$this->load->view('v_setting');
	}
 
	function tambah_aksi(){
		$nama_admin = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password
			);
		$this->m_setting->input_data($data,'admin');
		redirect('setting/index');
	}
 
}