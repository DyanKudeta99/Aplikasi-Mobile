<?php
class M_user extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('user');
		if($id != null){
			$this->db->where('Id_user', $id);
		}
		$query = $this->db->get();
		return $query;
		}
	}
?>