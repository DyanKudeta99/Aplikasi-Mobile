<?php
Class Example extends CI_Controller{
    
    function __construct() {
        parent::__construct();
		$this->load->model('LoginModel_Ahass');
		$model = $this->LoginModel_Ahass;
    }
    
    function index(){
        //$this->load->view('template');
        $this->load->view('template','table');
		
		//if($model->show_mekanik()){
			//redirect('Controllers/Mekanik');
		//}
    }
	
	
}