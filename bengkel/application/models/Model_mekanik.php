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
	
	function tambah() {
        $id_mekanik = $this->input->post('id_mekanik');
        $nama_mekanik = $this->input->post('nama_mekanik');
        $cp = $this->input->post('cp');
        $data = array (
            'id_mekanik' => $id_mekanik,
            'nama_mekanik' => $nama_mekanik,
            'cp'=> $cp
        );  
        $this->db->insert('mekanik', $data);
    }
}
?>