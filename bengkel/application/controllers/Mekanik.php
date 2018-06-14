<?php
class Mekanik extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		
	}
	public function index()
	{
		$this->load->model('Model_mekanik');
		$query = $this->Model_mekanik->get();
		$data= array(
				'template' => 'Tampil data mekanik',
				'mekanik' => $query->result(),
		);
		$this->load->view('template', $data);
		$this->load->view('view_mekanik', $data);
		$this->load->view('template_foot');
	}
		
	function tambahdata() {
        if($this->input->post('submit')){
			$this->load->model('Model_mekanik');
            $this->Model_mekanik->tambah();
            redirect('Mekanik/index');
        }
		$this->load->view('template');
        $this->load->view('v_tmekanik');
		$this->load->view('template_foot');
    }
}
?>