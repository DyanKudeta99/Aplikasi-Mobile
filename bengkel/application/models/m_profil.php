<?php
class m_profil extends CI_Model {
	public function get($id = null){
		$this->db->select('*');
		$this->db->from('admin');
		if($id != null){
			$this->db->where('id_admin', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	function edit() {
        $nama_admin = $this->input->post('nama_admin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array (
            'nama_admin' => $nama_admin,
            'username' => $username,
            'password'=> $password
        );  
        $this->db->update('admin', $data);
    }
}
?>