<?php

class ModelUser extends CI_Model {

	function __construct(){
	parent::__construct();
	}
	// cek keberadaan user di sistem
	function check_user_account($email, $password){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('email', $email);
		$this->db->where('pass', $password);

		return $this->db->get();
	}

	function check_activation($hash)
	{
		$this->db->select('email');
		$this->db->from('member');
		$this->db->where('hash', $hash);
		return $this->db->get();
	}

	// mengambil data user tertentu
	function get_user($id){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('id_member', $id);

		return $this->db->get();
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('member');

		return $this->db->get();
	}
	//menambahkan data user ke table
	function insert_user($data){
		$this->db->insert('member', $data);

	}

	function update_user($id, $data){
		$this->db->where('id_member', $id);
		$this->db->update('member', $data);
	}

	function checkUniqueEmail($email)
	{
		$this->db->select('email');
		$this->db->from('member');
		$this->db->where('email', $email);
		$num = $this->db->count_all_results();
		if ($num >= 1) {
			return false;
		} else {
			return true;
		}
		
	}

	function activating($hash)
	{
		$this->db->where('hash', $hash);
		$this->db->set('active', 1);
		$this->db->update('member');
	}

	function delete_user($id){
		$this->db->where('id_member', $id);
		$this->db->delete('member');
	}
}
?>
