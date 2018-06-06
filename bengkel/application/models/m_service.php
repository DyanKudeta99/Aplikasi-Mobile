<?php
class m_service extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('service');
		if($id != null){
			$this->db->where('Kode', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	function tambah() {
        $nama_mekanik = $this->input->post('nama_mekanik');
        $data = array (
            'nama_mekanik' => $nama_mekanik,
        );  
        $this->db->insert('service', $data);
    }
	
	function get_option() {
		$this->db->select('*');
		$this->db->from('mekanik');
		$query = $this->db->get();
		return $query->result();
	}
}
?>