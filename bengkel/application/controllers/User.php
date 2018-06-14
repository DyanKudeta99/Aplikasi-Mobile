<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->model('M_user');
		$query = $this->M_user->get();
		$data= array(
				'template' => 'Tampil data sparepart',
				'user' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('view_user');
		$this->load->view('template_foot');
		}
	}
?>