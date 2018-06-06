<?php
class service extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('m_service');
		$query = $this->m_service->get();
		$data= array(
				'template' => 'Tampil data service',
				'service' => $query->result(),
		);
		$this->load->view('template', $data);
		$data=array('get_nama_mekanik'=> $this->m_service->get_option());  
		$this->load->view('v_service', $data);
		
	}
	
	function tambahdata() {
        if($this->input->post('submit')){
			$this->load->model('m_service');
            $this->m_service->tambah();
            redirect('service/index');
        }
        $this->load->view('v_input');
    }
}
?>