<?php
class setting extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('m_setting');
		$query = $this->m_setting->get();
		$data= array(
				'template' => 'Tampil perubahan profil',
				'admin' => $query->result(),
		);
		$data['admin'] = $this->m_setting->tampil_data()->result();
		$this->load->view('template', $data);
		$this->load->view('v_setting');
		
	}
	function edit($id){
		$where = array('id' => $id);
		$data['admin'] = $this->m_setting->edit_data($id,'admin')->result();
		$this->load->view('v_setting',$data);
	}
	function update(){
		$id = $this->input->post('id_admin');
		$nama = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
		'nama_admin' => $nama,
		'username' => $username,
		'password' => $password
		);
		
		$id = array(
		'id_admin' => $id
		);

		$this->m_setting->update_data($id, $data,'admin');
		redirect('setting/index');
	}
}
?>