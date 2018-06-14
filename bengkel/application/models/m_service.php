<?php
class m_service extends CI_Model {
	public function get(){
		$query = $this->db->query("SELECT service.*, admin.*, mekanik.*, harga_service.*, user.*, booking.*, sparepart.* FROM service 
		JOIN admin ON admin.id_admin = service.id_admin 
		JOIN sparepart ON sparepart.Kode_sparepart = service.Kode_sparepart 
		JOIN mekanik ON mekanik.id_mekanik = service.id_mekanik
		JOIN booking ON booking.id_booking = service.id_booking
        JOIN user ON user.Id_user = service.Id_user
		JOIN harga_service ON harga_service.Kode_Service = service.Kode_service");
		return $query->result();
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
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
?>