<?php 
class m_tmekanik extends CI_Model{
	function tampil_data(){
		return $this->db->get('mekanik');
	}
 
	function input_data($data,$mekanik){
		$this->db->insert($mekanik,$data);
	}
}
?>