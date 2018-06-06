<?php
class LoginModel_Ahass extends CI_Model{
	
	public function proses_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->row();		
	}
	
	function show_mekanik(){
		$hasil=$this->db->query("SELECT * FROM mekanik");
		return $hasil;
		
	}
	
}
?>