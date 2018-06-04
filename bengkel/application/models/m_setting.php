<?php 
class m_setting extends CI_Model{
	function tampil_data(){
		return $this->db->get('admin');
	}
 
	function input_data($data,$admin){
		$this->db->update($admin,$data);
	}
}
?>