<?php 

class ModelBlog extends CI_Model {
	 
	 function __construct(){
	 parent::__construct();
	 }
	 // cek keberadaan user di sistem
	 function insert_blog($data){
	 	$ins = $this->db->insert('blog', $data);
	 	return $ins;
	 }

	 function select_all(){
	 	$this->db->select('*');
		$this->db->from('blog');
		// $this->db->order_by('date_modified', 'desc');
		return $this->db->get();
		// $data = $this->db->query('select * from blog');
		// return $data->result_array();
	 }

	 function select_by_id($id_blog){
	 	$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('id_blog', $id_blog);
		return $this->db->get();
	 }

	 function update_blog($id_blog, $data){
		$this->db->where('id_blog', $id_blog);
		$this->db->update('blog', $data);
	}

	 function delete_blog($id_blog){
	 	$this->db->where('id_blog', $id_blog);
		$this->db->delete('blog');
	 }
}
?>