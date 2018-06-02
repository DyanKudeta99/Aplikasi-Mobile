<?php
class home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('m_home');
		$this->load->view('template', $data);
		$this->load->view('v_home');
		
	}
}
?>