<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	function __construct(){
		parent::__construct();
		$this->load->model('ModelUser');
		$this->load->model('ModelBlog');
		$this->load->model('ModelPosting');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if ($this->session->userdata('level') != 2) {
			redirect(site_url('Welcome'));
		}
	}

	public function index(){
		$id = $this->session->userdata('id_member');
		$data['blog'] = $this->ModelBlog->select_all()->result();
		$data['admin'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('Admin/table_blog',$data);
	}

	public function tambahBlog(){
		$config['upload_path'] = './images/blog/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '5000';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()){
			$error = array('error'=>$this->upload->display_errors());
			// $this->load->view('Admin/form_blog_add', $error);
			// echo "$error";
			echo $error['error'];
		}
		else {
			$upload_data = $this->upload->data();
			$data['gambar'] = $upload_data['file_name'];
			$data['isi'] = $this->input->post('isi');
			$data['judul'] = $this->input->post('judul');
			// $upload_data['username'] = $judul;
			// $data = array('upload_data' => $upload_data);

			// print_r($data);
			// $this->load->view('tes', $data);
			$cek = $this->ModelBlog->insert_blog($data);
			if ($cek == null) {
				echo "error insert";
			}
			redirect(site_url('Admin'));

		}

	}

	public function updateBlog(){
		$config['upload_path'] = './images/blog/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '5000';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()){
			$data['isi'] = $this->input->post('isi');
			$data['judul'] = $this->input->post('judul');

			$cek = $this->ModelBlog->insert_blog($data);
			if ($cek == null) {
				echo "error insert";
			}
			redirect(site_url('Admin'));
		}
		else {
			$upload_data = $this->upload->data();
			$data['gambar'] = $upload_data['file_name'];
			$data['isi'] = $this->input->post('isi');
			$data['judul'] = $this->input->post('judul');

			$cek = $this->ModelBlog->insert_blog($data);
			if ($cek == null) {
				echo "error insert";
			}
			redirect(site_url('Admin'));

		}

	}

	public function viewTambahBlog(){
		$this->load->view('Admin/form_blog_add');
	}

	public function viewEditBlog($id){
		$data['blog'] = $this->ModelBlog->select_by_id($id)->result();
		$this->load->view('Admin/form_blog_edit', $data);
	}

	public function deleteBlog($id){
		$this->ModelBlog->delete_blog($id);
		redirect(site_url('Admin'));
	}

	public function viewTableMember(){
		$id = $this->session->userdata('id_member');
		$data['member'] = $this->ModelUser->select_all()->result();
		$data['admin'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('Admin/table_member', $data);
	}

	public function deleteMember($id){
		$this->ModelUser->delete_user($id);
		redirect(site_url('Admin/viewTableMember'));
	}

	public function viewTablePosting(){
		$id = $this->session->userdata('id_member');
		$data['posting'] = $this->ModelPosting->select_all()->result();
		$data['admin'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('Admin/table_posting', $data);
	}

	public function deletePosting($id){
		$this->ModelPosting->delete_posting($id);
		redirect(site_url('Admin/viewTablePosting'));
	}

}
