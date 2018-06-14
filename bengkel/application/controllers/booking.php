<?php
class booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('m_booking');
		$query = $this->m_booking->get();
		$data= array(
				'template' => 'Tampil data booking',
				'booking' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('v_booking', $data);
		$this->load->view('template_foot');
		
	}
}
?>