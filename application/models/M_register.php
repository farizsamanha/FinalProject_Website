<?php
class m_register extends CI_Model{
	function insert_admin($table, $where){
		return $this->db->insert($table, $where);
	}
}
?>