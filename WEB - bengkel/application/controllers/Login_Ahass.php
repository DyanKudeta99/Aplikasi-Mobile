<?php
class Login_Ahass extends CI_Controller{
	public function index(){
		if(isset($_POST['btn_log'])){
		$this->load->model('LoginModel_Ahass');
		$model = $this->LoginModel_Ahass;
		
		$this->load->library('database');
		$this->load->helper('url');
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if($model->cek_login($username, $password)){
				if(cek_login>0){
					
				}
				$this->load->view('template');
			}
			else{
				$this->load->view('login_error_view');
			}
		}
		else{
			$this->load->view('LoginView_Ahass', ['model'=>'$model']);
		}
	}
}