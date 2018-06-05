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
		$this->load->view('v_service');
		
	}
}
?>