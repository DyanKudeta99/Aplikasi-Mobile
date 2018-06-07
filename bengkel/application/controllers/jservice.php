<?php
class jservice extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		
	}
	public function index()
	{
		$this->load->model('m_jservice');
		$query = $this->m_jservice->get();
		$data= array(
				'template' => 'Tampil data service',
				'harga_service' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('v_jservice', $data);
		$this->load->view('template_foot');
	}
		
	function tambahdata() {
        if($this->input->post('submit')){
			$this->load->model('m_jservice');
            $this->m_jservice->tambah();
            redirect('jservice/index');
        }
		$this->load->view('template');
        $this->load->view('v_tservice');
		$this->load->view('template_foot');
    }
}
?>