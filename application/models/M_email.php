<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_email extends CI_Model {

	public function readEmail(){
		$data = $this->db->get('pesanmasuk');
		return $data->result_array();
	}

	public function tambahData($data){
		$this->db->insert('pesanmasuk', $data);
	}

	public function Delete_Data($data,$where){
		$res = $this->db->delete($data,$where);
 	}
}