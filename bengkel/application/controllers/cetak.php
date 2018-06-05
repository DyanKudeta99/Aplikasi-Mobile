<?php
class cetak extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('m_cetak');
		$query = $this->m_cetak->get();
		$data= array(
				'service' => $query->result(),
		);
		$this->load->view('v_cetak');
		
	}
}
?>