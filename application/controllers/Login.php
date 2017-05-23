<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index()
	{
		$this->load->view('v_login3');
		//$gagal = "Login Gagal";
	}
	public function Admin()
	{
		$this->load->view('admin/header1');
		$this->load->view('admin/body1');
	} 

	function aksi_login(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$where = array(
				'username' => $username,
				'password' => $password);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows(); 
		if($cek > 0){
			$data_session = array(
				'nama'=>$username,
				'status'=> "login"); 
			$this->session->set_userdata($data_session);
			$this->load->view('adminBaru/headerBaru');
			$this->load->view('adminBaru/bodyBaru');
			//redirect(base_url('index.php/admin')); 
			//var_dump($cek);
		}
		else {
			$this->index();
			echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
		
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}
