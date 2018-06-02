<?php
class m_booking extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('booking');
		if($id != null){
			$this->db->where('id_booking', $id);
		}
		$query = $this->db->get();
		return $query;
		}
	}
?>