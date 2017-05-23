<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
	}
	
	public function index()
	{
		$this->load->view('v_register3');
		$this->load->library('form_validation');
		//validating 
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Name Field & password
		$this->form_validation->set_rules('name', 'username');
		$this->form_validation->set_rules('pass', 'password');
	}

	function aksi_register(){
		if ($this->form_validation->run() == TRUE) {
			$this->load->view('v_register');
		} else {
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
			$where = array(
					'username' => $username,
					'password' => $password);
			$cek = $this->m_register->insert_admin("admin",$where);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('v_register3', $data);
		}

	}
}
