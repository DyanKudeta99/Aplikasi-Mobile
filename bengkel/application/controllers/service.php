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
		
				'get_service' => $this->m_service->get(),
		);
		$this->load->view('template',$data);
		$data=array('get_nama_mekanik'=> $this->m_service->get_option());  
		$this->load->view('v_service', $data);
		$this->load->view('template_foot');
	}
	
	function tambahdata() {
        if($this->input->post('submit')){
			$this->load->model('m_service');
            $this->m_service->tambah();
            redirect('service/index');
        }
        $this->load->view('v_input');
    }
	
	function edit($id){
	if (isset ($_GET['edit'])){
		$where = array('Kode' => $id);
		$data['service'] = $this->m_service->edit_data($where,'service')->result();
		$this->load->view('v_edit',$data);
	}
	$data['service'] = $this -> m_service -> get();
	$this->load->view('v_edit');
	}
	
	function update(){
	$id = $this->input->post('Kode');
	$Nama_sparepart = $this->input->post('Nama_sparepart');
	$Harga_sparepart = $this->input->post('Harga_sparepart');
	$Nama_service = $this->input->post('Nama_service');
	$Harga_service = $this->input->post('Harga_service');
	$nama_mekanik = $this->input->post('nama_mekanik');
 
	$data = array(
		'Nama_sparepart' => $Nama_sparepart,
		'Harga_sparepart' => $Nama_sparepart,
		'Nama_service' => $Nama_service,
		'Harga_service' => $Nama_service,
		'nama_mekanik' => $nama_mekanik,
	);
 
	$where = array(
		'Kode' => $id
	);
 
	$this->m_data->update_data($where,$data,'service');
	redirect('service/index');
}
}
?>