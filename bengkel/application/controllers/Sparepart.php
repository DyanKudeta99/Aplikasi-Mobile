<?php
class Sparepart extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
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
		$this->load->view('v_sparepart');
		}
	}
?>