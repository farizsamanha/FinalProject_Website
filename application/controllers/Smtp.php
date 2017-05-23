<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smtp extends CI_Controller {

	public function index(){
		$this->load->model('M_subscribe');
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');

		$data=array(
			'nama' => $nama,
			'email' => $email,
			);				
		$res = $this->M_subscribe->insert('subscribe', $data);


		$sender_email 	= "doctorbarbershop99@gmail.com";
		$user_password 	= "busur180";
		$username 		= "Admin dr. Barbershop";
		$receiver_email = $this->input->post('email');
		$subject 		= "Semangat Pagi Para Pecinta Gaya!";
		$message 		= "Ikuti terus kelanjutan dari DoctorBarbershop, nanti kita akan memperkenalkan beberapa produk pomade yang kita sediakan di gerai kita! See You Guys!";

		$this->configSmtp();
		$this->email->from($sender_email, $username);
		$this->email->to($receiver_email);
		$this->email->subject($subject);
		$this->email->message($message);

		//$mail = ($this->email->send()) ? "Sent" : "Failed" ;
		//echo $this->email->print_debugger();

		//echo $mail;
		redirect('index.php/Welcome');
	}

	private function configSmtp(){
		$config['protocol'] 	= 'smtp';
		$config['smtp_host'] 	= 'ssl://smtp.googlemail.com';
		$config['smtp_port'] 	= 465;
		$config['smtp_user'] 	= 'doctorbarbershop99@gmail.com';
		$config['smtp_pass'] 	= 'busur180';
		$config['mailtype']		= 'html';
		$config['charset']	 	= 'utf-8';
		$config['newline'] 		= "\r\n";
		$config['wordwrap'] 	= TRUE;
	
		$this->load->library('email', $config);
	}

	public function viewPage(){
		$this->load->model('M_subscribe');
		$data = $this->M_subscribe->readData();
		$dataTampil = array('dataSubscribe'=> $data);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodySubscribe', $dataTampil);
	}

	public function deleteSubs($id){
		$this->load->model('M_subscribe');
		$where = array('id'=>$id);
		$res = $this->M_subscribe->deleteSubs('subscribe',$where);
		if($res<1){
			redirect('index.php/Smtp/viewPage');
		}
		else{
			echo "Gagal Delete";
		}

	}

}