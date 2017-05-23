<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_subscribe extends CI_Model {
	public function readData(){
		$data = $this->db->get('subscribe');
		return $data->result_array();
	}

	public function deleteSubs($data,$where){
		$this->db->delete($data,$where);
	}

	public function insert($tablename, $where){
		return $this->db->insert($tablename, $where);
	}

}