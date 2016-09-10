<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if ($this->session->userdata('id_member') == null) {
			redirect(site_url('Welcome'));
		}
	}

	public function index()
	{
		
	}

	public function tambahPosting(){
		$config['upload_path'] = './images/posting/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $config['max_size'] = '2000';
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

	public function viewKelolaMobil(){
		$this->load->view('kelolaKendaraan');
	}

	public function viewKelolaMotor(){
		$this->load->view('kelolaMotor');
	}

	public function viewKelolaKb(){
		$this->load->view('kelolaKb');
	}

	public function viewKelolaJadwal(){
		$this->load->view('kelolaJadwal');
	}



}
