<?php
class m_setting extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('admin');
		if($id != null){
			$this->db->where('id_admin', $id);
		}
		$query = $this->db->get();
		return $query;
		}
	function tampil_data(){
		return $this->db->get('admin');
	}
	function edit_data($id,$admin){		
		return $this->db->get_where($table,$id);
	}
	function update_data($id,$data,$admin){
		$this->db->where($id);
		$this->db->update($admin,$data);
	}	
}
?>