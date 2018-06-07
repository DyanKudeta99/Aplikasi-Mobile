<?php
class profil extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->model('m_admin');
		$query = $this->m_admin->get();
		$data= array(
				'template' => 'Tampil profil pengguna',
				'admin' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('v_profil', $data);
		$this->load->view('template_foot');
	}

	function editdata() {
        if($this->input->post('submit')){
			$this->load->model('m_profil');
            $this->m_profil->edit();
            redirect('profil/index');
        }
        $this->load->view('v_profil');
    }
}
?>