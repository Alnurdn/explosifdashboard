<?php
class Mymodel extends CI_Model{
	public function InsertData($tableName,$data){
		$result = $this->db->insert($tableName,$data); 
		return $result;
	}
}
?>