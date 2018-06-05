<?php
class LoginModel_Ahass extends CI_Model{
	public $username;
	public $password;
	
	public function cek_login($username, $password){
		$this->db->where('username');
		$this->db->where('password');
		return $this->db->get('admin')->row();		
	}
	
	function show_mekanik(){
		$hasil=$this->db->query("SELECT * FROM mekanik");
		return $hasil;
		
	}
	
}
?>