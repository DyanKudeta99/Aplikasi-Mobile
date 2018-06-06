<?php 
class m_input extends CI_Model{
	function tampil_data(){
		return $this->db->get('service');
	}
 
	function input_data($data,$service){
		$this->db->insert($service,$data);
	}
}
?>