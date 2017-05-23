<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function readData(){
		$data = $this->db->get('produk');
		return $data->result_array();
	}

	public function readDataStyle(){
		$data = $this->db->get('gayarambut');
		return $data->result_array();
	}

	public function tambahData($data){
		$this->db->insert('produk', $data);
	}

	public function tambahDataStyle($data){
		$this->db->insert('gayarambut', $data);
	}

	public function GetBarang($where=""){
		//$data = $this->db->query('select * from produk '.$where);
		$data =$this->db->get('produk '.$where);
		return $data->result_array();
 	}

 	public function GetStyle($where=""){
		//$data = $this->db->query('select * from produk '.$where);
		$data =$this->db->get('gayarambut '.$where);
		return $data->result_array();
 	}

 	public function Update_Data($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	public function Update_DataStyle($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	public function Delete_Data($data,$where){
		$this->db->delete($data,$where);
 	}

 	public function GetBarang2(){
		$data =$this->db->get('produk');
		return $data->result_array();
 	}
}