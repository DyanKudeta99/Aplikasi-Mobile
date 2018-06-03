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
	
	function tambah() {
        $kode_sparepart = $this->input->post('kode_sparepart');
        $nama_sparepart = $this->input->post('nama_sparepart');
        $harga_sparepart = $this->input->post('harga_sparepart');
        $data = array (
            'kode_sparepart' => $kode_sparepart,
            'nama_sparepart' => $nama_sparepart,
            'harga_sparepart'=> $harga_sparepart
        );  
        $this->db->insert('sparepart', $data);
    }
}
?>