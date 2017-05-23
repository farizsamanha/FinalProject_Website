<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	function __construct() {
        parent::__construct(); 
        $this->load->model('M_email');
    }

	public function index(){ 
		$this->readEmail();
	}

	public function readEmail(){
		
		$data = $this->M_email->readEmail();
		$dataTampil = array('dataPesan'=> $data); //dataTampil adalah variabel yg berisi array $data dari db yang kemudian $data dinamakan dataProduk untuk dibawa dlm bentuk array ke view
		//$this->load->view('readProduk', $dataTampil);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyPesan', $dataTampil);
	}

	

	public function addEmail(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'hp' => $this->input->post('hape'),
			'pesan' => $this->input->post('pesan')
			);
		$this->load->model('M_email'); 
		$this->M_email->tambahData($data);

		echo '<script language="javascript">';
		echo 'alert("Pesan berhasil dikirim");';
		echo '</script>';
		//$this->balikHome();
		redirect('index.php/Welcome/');
		/* $kepada = "farizsamanha@gmail.com";
		$subject = "FeedBack Konsumen";
		//print_r($data);
		$headers = "From: ".$data['email'];
		$pesan = ($data['pesan']);
		if(strlen($pesan) > 70){
			$pesan = wordwrap($pesan, 70);
		}
		//print_r($data);
		mail($kepada,$subject,$pesan,$headers);			
		 */
	}

	public function delete($id){
		$where = array('id'=>$id);
		$res = $this->M_email->Delete_data('pesanmasuk',$where);
		if($res<1){
			redirect('index.php/email');
		}
		else{
			echo "Gagal Delete";
		}
	}

}