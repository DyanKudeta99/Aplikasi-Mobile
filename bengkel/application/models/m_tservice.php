<?php 
class m_tservice extends CI_Model{
	function tampil_data(){
		return $this->db->get('harga_service');
	}
 
	function input_data($data,$harga_service){
		$this->db->insert($harga_service,$data);
	}
}
?>