<?php
class Mekanik extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	public function index(){
		$this->load->model('Model_mekanik');
		$query = $this->Model_mekanik->get();
		$data= array(
				'template' => 'Tampil data mekanik',
				'mekanik' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('view_mekanik');
		
	}
}
?>