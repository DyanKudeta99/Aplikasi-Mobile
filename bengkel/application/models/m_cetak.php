<?php
class m_cetak extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('service');
		if($id != null){
			$this->db->where('Kode', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
?>