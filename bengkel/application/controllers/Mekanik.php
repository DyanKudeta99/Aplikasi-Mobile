<?php
class Mekanik extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_mekanik');
	}
	
	function index(){
		$x['data']=$this->Model_mekanik->show_mekanik();
		$this->load->view('view_mekanik', $x);
		$data = array(
				'header' => 'Tampil Data Mekanik',
		);
		$this->load->view('header', $data);
		$this->load->view('view_mekanik');
		$this->load->view('footer');
		
	}
}
?>