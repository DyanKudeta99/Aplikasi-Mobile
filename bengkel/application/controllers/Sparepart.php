<?php
class Sparepart extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		
	}
	public function index()
	{
		$this->load->model('m_sparepart');
		$query = $this->m_sparepart->get();
		$data= array(
				'template' => 'Tampil data sparepart',
				'sparepart' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('v_sparepart', $data);
		$this->load->view('template_foot');
	}
		
	function tambahdata() {
        if($this->input->post('submit')){
			$this->load->model('m_sparepart');
            $this->m_sparepart->tambah();
            redirect('sparepart/index');
        }
		$this->load->view('template');
        $this->load->view('v_tsparepart');
		$this->load->view('template_foot');
    }
}
?>