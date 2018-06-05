<?php 
class m_tsparepart extends CI_Model{
	function tampil_data(){
		return $this->db->get('sparepart');
	}
 
	function input_data($data,$sparepart){
		$this->db->insert($sparepart,$data);
	}
}
?>