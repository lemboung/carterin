<?php

class Cmodel extends CI_Model
{
  public function GetMember($username){
		$data = $this->db->query('select * from member where username = "'.$username.'"');
		return $data->result_array();
	}
}
?>
