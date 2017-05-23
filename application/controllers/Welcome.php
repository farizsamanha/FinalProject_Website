<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
        parent::__construct(); 
        $this->load->model('m_crud');
    }	
	public function index()
	{
		$data = $this->m_crud->GetBarang2();
		$dataGaya = $this->m_crud->GetStyle();
		$bringData2 = array('bringData'=>$data, 'bringGaya' =>$dataGaya);
		$this->load->helper('url');
		$this->load->view('home', $bringData2);
		//$this->load->view('body', $bringData2);
	}
	
}
