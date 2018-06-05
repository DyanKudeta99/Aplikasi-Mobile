<?php
class Model_mekanik extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('mekanik');
		if($id != null){
			$this->db->where('Id_mekanik', $id);
		}
		$query = $this->db->get();
		return $query;
		}
	}
?>