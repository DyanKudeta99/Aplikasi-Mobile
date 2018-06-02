<?php
class m_admin extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('admin');
		if($id != null){
			$this->db->where('id_admin', $id);
		}
		$query = $this->db->get();
		return $query;
		}
	}
?>