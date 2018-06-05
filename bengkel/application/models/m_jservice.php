<?php
class m_jservice extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('harga_service');
		if($id != null){
			$this->db->where('Kode_service', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	function tambah() {
        $Kode_service = $this->input->post('Kode_service');
        $Jenis_service = $this->input->post('Jenis_service');
        $Harga_service = $this->input->post('Harga_service');
        $data = array (
            'Kode_service' => $Kode_service,
            'Jenis_service' => $Jenis_service,
            'Harga_service'=> $Harga_service
        );  
        $this->db->insert('harga_service', $data);
    }
}
?>