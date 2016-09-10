<?php 

class ModelPosting extends CI_Model {
	 
	 function __construct(){
	 parent::__construct();
	 }
	 // cek keberadaan user di sistem
	 function insert_blog($data){
	 	$ins = $this->db->insert('posting', $data);
	 	return $ins;
	 }

	 function select_all(){
	 	$this->db->select('*');
		$this->db->from('posting');
		// $this->db->order_by('date_modified', 'desc');
		return $this->db->get();
		// $data = $this->db->query('select * from blog');
		// return $data->result_array();
	 }

	 function select_by_id($id_post){
	 	$this->db->select('*');
		$this->db->from('posting');
		$this->db->where('id_posting', $id_post);
		return $this->db->get();
	 }

	 function update_blog($id_post, $data){
		$this->db->where('id_posting', $id_post);
		$this->db->update('posting', $data);
	}

	 function delete_blog($id_post){
	 	$this->db->where('id_posting', $id_post);
		$this->db->delete('posting');
	 }
}
?>