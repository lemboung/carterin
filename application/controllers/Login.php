<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		// $this->load->library('input');
	}

	public function index()
	{
		// $this->load->view('listKendaraan');
	}

	// memeriksa keberadaan akun username
	public function login(){
		$username = $this->input->post('email', 'true');
		$password = $this->input->post('password', 'true');
		$temp_account = $this->ModelUser->check_user_account($username, $password)->row();
		// check account
		$num_account = count($temp_account);

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
			// echo "validasi form";
		}
		else
		{
			if ($num_account > 0){
		// kalau ada set session
				$array_items = array(
				'id_member' => $temp_account->id_member,
				'username' => $temp_account->username,
				'logged_in' => true,
				'level' => $temp_account->level
				);
				$this->session->set_userdata($array_items);
				redirect(site_url('Welcome'));
			}
			else {
			// kalau ga ada diredirect lagi ke halaman login
				$this->session->set_flashdata('notification', 'Peringatan : Username dan Password
				tidak cocok');
				echo "gagal login";
				redirect(site_url('Welcome'));
			}
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Welcome'));
	}

	public function register(){

		 $config['upload_path'] = './images/member/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $config['max_size'] = '100';
		 $config['max_width'] = '1024';
		 $config['max_height'] = '768';

		 $this->load->library('upload', $config);

		 if (!$this->upload->do_upload('foto')){
			 $error = array('error'=>$this->upload->display_errors());
			 $this->load->view('Index', $error);
		 	// echo "error";
		 }
		 else {
			 $upload_data = $this->upload->data();
			 $data['foto'] = $upload_data['file_name'];
			 $data['username'] = $this->input->post('username');
			 $data['pass'] = $this->input->post('pass');
			 $data['email'] = $this->input->post('email');
			 $data['nama'] = $this->input->post('nama');
			 $data['alamat'] = $this->input->post('alamat');
			 $data['kota'] = $this->input->post('kota');
			 $data['no_telp'] = $this->input->post('no_telp');
			 $data['noktp'] = $this->input->post('noktp');
			 $data['level'] = 1;
			 // $upload_data['username'] = $judul;
			 // $data = array('upload_data' => $upload_data);

			 // $this->load->view('tes', $data);
			 $this->ModelUser->insert_user($data);
		 	 redirect(site_url('Welcome'));

		 }


		 // echo $data['username'];
	 }

}
