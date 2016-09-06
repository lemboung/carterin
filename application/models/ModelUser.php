<?php 

class ModelUser extends CI_Model {
	 
	 function __construct(){
	 parent::__construct();
	 }
	 // cek keberadaan user di sistem
	 function check_user_account($username, $password){
		 $this->db->select('*');
		 $this->db->from('member');
		 $this->db->where('email', $username);
		 $this->db->where('pass', $password);

		 return $this->db->get();
	 }
	// mengambil data user tertentu
	 function get_user($id_user){
		 $this->db->select('*');
		 $this->db->from('user');
		 $this->db->where('id_user', $id_user);

		 return $this->db->get();
	 }
	 //menambahkan data user ke table
	 function insert_user($data){
		 // echo $data['username'];
		 // echo $data['file_name'];
		 $this->db->insert('member', $data);

 	 }
}
?>