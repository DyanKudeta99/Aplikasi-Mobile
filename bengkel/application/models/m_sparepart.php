<?php
class M_sparepart extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('sparepart');
		if($id != null){
			$this->db->where('Kode_sparepart', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
?>