<?php
class Login_Ahass extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index(){
		$this->load->view('LoginView_Ahass');
	}
	public function cek_login(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$cek = $this->LoginModel_Ahass->proses_login($username,$password);
		$hasil = count($cek);
		if($hasil > 0){
			echo "<script type='text/javascript'> alert ('Login Berhasil!!!');
			</script>";
			redirect('Login_Ahass/pageAdmin');
		}else{
			echo "<script type='text/javascript'> alert ('Username/Password salah!!!');
			</script>";
			$this->load->view('LoginView_Ahass');
		}
	}
	public function pageAdmin(){
		$this->load->view('template');
	}
}