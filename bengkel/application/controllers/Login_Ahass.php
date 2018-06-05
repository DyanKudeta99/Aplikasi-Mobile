<?php
class Login_Ahass extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index(){
		$this->load->view('template');
	}
	public function cek_login(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$where = array(
		'username' => $username, 'password' => $password
		)
		$cek = $this->data_login->cek_login('admin', $where)->num_rows();
		if($cek > 0){
			$data_session = array(
			'username' => $username, 'password' => $password);
			$this->session->set_userdata($data_session);
			echo "<script type='text/javascript'> alert ('Login Berhasil!!!');
			</script>";
			$this->load->view('template');
		}
		else{
			echo "<script type='text/javascript'> alert ('Username/Password salah!!!');
			</script>";
			$this->load->view('LoginView_Ahass');
		}
		
	}
}