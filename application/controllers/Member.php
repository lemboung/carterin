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
		$this->load->model('ModelPosting');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if ($this->session->userdata('id_member') == null) {
			redirect(site_url('Welcome'));
		}
	}

	public function index(){
		$id = $this->session->userdata('id_member');
		$data['posting'] = $this->ModelPosting->select_member_mobil($id)->result();
		$this->load->view('kelolaKendaraan', $data);
	}

	public function tambahPosting(){
		$config['upload_path'] = './images/posting/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $config['max_size'] = '2000';
		 // $config['max_width'] = '1024';
		 // $config['max_height'] = '768';

		 $this->load->library('upload', $config);

		 if (!$this->upload->do_upload('file')){
			 $data['id_member'] = $this->session->userdata('id_member');
			 $data['judul'] = $this->input->post('judul');
			 if ($this->input->post('driver')=="1") {
			 	$data['driver'] = "1";
			 }
			 $data['harga'] = $this->input->post('harga');
			 $data['jenis'] = $this->input->post('jenis');
			 $data['merek'] = $this->input->post('merek');
			 $data['tipe'] = $this->input->post('tipe');
			 $data['seater'] = $this->input->post('seater');
			 $data['warna'] = $this->input->post('warna');
			 $data['deskripsi'] = $this->input->post('deskripsi');
			 $data['kota'] = $this->input->post('kota');
			 if ($this->input->post('antar')=="1") {
			 	$data['antar'] = "1";
			 }
			 if ($this->input->post('ambil')=="1") {
			 	$data['ambil'] = "1";
			 }
			 $cek = $this->ModelPosting->insert_posting($data);
		 	 if ($cek == null) {
		 	 	echo "error insert";
		 	 }
		 	 redirect(site_url('Member/viewKelolaMobil'));
		 }
		 else {
			 $upload_data = $this->upload->data();
			 $data['gambar'] = $upload_data['file_name'];
			 $data['id_member'] = $this->session->userdata('id_member');
			 $data['judul'] = $this->input->post('judul');
			 if ($this->input->post('driver')=="1") {
			 	$data['driver'] = "1";
			 }
			 $data['harga'] = $this->input->post('harga');
			 $data['jenis'] = $this->input->post('jenis');
			 $data['merek'] = $this->input->post('merek');
			 $data['tipe'] = $this->input->post('tipe');
			 $data['seater'] = $this->input->post('seater');
			 $data['warna'] = $this->input->post('warna');
			 $data['deskripsi'] = $this->input->post('deskripsi');
			 $data['kota'] = $this->input->post('kota');
			 if ($this->input->post('antar')=="1") {
			 	$data['antar'] = "1";
			 }
			 if ($this->input->post('ambil')=="1") {
			 	$data['ambil'] = "1";
			 }
			 // $upload_data['username'] = $judul;
			 // $data = array('upload_data' => $upload_data);

			 // print_r($data);
			 // $this->load->view('tes', $data);
			 $cek = $this->ModelPosting->insert_posting($data);
		 	 if ($cek == null) {
		 	 	echo "error insert";
		 	 }
		 	 redirect(site_url('Member/viewKelolaMobil'));

		 }

	}

	public function updatePosting(){
		$config['upload_path'] = './images/posting/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $config['max_size'] = '2000';
		 // $config['max_width'] = '1024';
		 // $config['max_height'] = '768';
		 $id = $this->input->post('id_posting');

		 $this->load->library('upload', $config);

		 if (!$this->upload->do_upload('file')){
			 $data['id_member'] = $this->session->userdata('id_member');
			 $data['judul'] = $this->input->post('judul');
			 if ($this->input->post('driver')=="1") {
			 	$data['driver'] = "1";
			 }
			 $data['harga'] = $this->input->post('harga');
			 $data['jenis'] = $this->input->post('jenis');
			 $data['merek'] = $this->input->post('merek');
			 $data['tipe'] = $this->input->post('tipe');
			 $data['seater'] = $this->input->post('seater');
			 $data['warna'] = $this->input->post('warna');
			 $data['deskripsi'] = $this->input->post('deskripsi');
			 $data['kota'] = $this->input->post('kota');
			 if ($this->input->post('antar')=="1") {
			 	$data['antar'] = "1";
			 }
			 if ($this->input->post('ambil')=="1") {
			 	$data['ambil'] = "1";
			 }
			 $cek = $this->ModelPosting->update_posting($id, $data);
		 	 if ($cek == null) {
		 	 	echo "error insert";
		 	 }
		 	 redirect(site_url('Member/viewKelolaMobil'));
		 }
		 else {
			 $upload_data = $this->upload->data();
			 $data['gambar'] = $upload_data['file_name'];
			 $data['id_member'] = $this->session->userdata('id_member');
			 $data['judul'] = $this->input->post('judul');
			 if ($this->input->post('driver')=="1") {
			 	$data['driver'] = "1";
			 }
			 $data['harga'] = $this->input->post('harga');
			 $data['jenis'] = $this->input->post('jenis');
			 $data['merek'] = $this->input->post('merek');
			 $data['tipe'] = $this->input->post('tipe');
			 $data['seater'] = $this->input->post('seater');
			 $data['warna'] = $this->input->post('warna');
			 $data['deskripsi'] = $this->input->post('deskripsi');
			 $data['kota'] = $this->input->post('kota');
			 if ($this->input->post('antar')=="1") {
			 	$data['antar'] = "1";
			 }
			 if ($this->input->post('ambil')=="1") {
			 	$data['ambil'] = "1";
			 }
			 // $upload_data['username'] = $judul;
			 // $data = array('upload_data' => $upload_data);

			 // print_r($data);
			 // $this->load->view('tes', $data);
			 $cek = $this->ModelPosting->update_posting($id, $data);
		 	 if ($cek == null) {
		 	 	echo "error insert";
		 	 }
		 	 redirect(site_url('Member/viewKelolaMobil'));

		 }

	}

	public function updateAkun(){
		$id = $this->input->post('id_member');
		 $config['upload_path'] = './images/member/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $config['max_size'] = '2000';
		 //  $config['max_width'] = '1024';
		//  $config['max_height'] = '768';

		 $this->load->library('upload', $config);

		 if (!$this->upload->do_upload('foto')){
			 if ($this->input->post('pass') != null) {
			 	$p = $this->input->post('pass');
				$data['pass'] = md5($p);
			 }
			 $data['username'] = $this->input->post('username');
			 $data['email'] = $this->input->post('email');
			 $data['no_telp'] = $this->input->post('no_telp');

			 $this->ModelUser->update_user($id, $data);
		 	 redirect(site_url('Welcome'));
		 }
		 else {
			 $upload_data = $this->upload->data();
			 $data['foto'] = $upload_data['file_name'];
			 if ($this->input->post('pass') != null) {
			 	$p = $this->input->post('pass');
				$data['pass'] = md5($p);
			 }
			 $data['username'] = $this->input->post('username');
			 $data['email'] = $this->input->post('email');
			 $data['no_telp'] = $this->input->post('no_telp');

			 $this->ModelUser->update_user($id, $data);
		 	 redirect(site_url('Welcome'));

		 }


		 // echo $data['username'];
	 }

	public function editPosting($id){
		$data['form'] = $this->ModelPosting->select_by_id($id)->result();
		$this->load->view('editKendaraan', $data);
	}

	public function editAkun(){
		$id = $this->session->userdata('id_member');
		$data['member'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('editAkun', $data);
	}

	public function viewKelolaMobil(){
		$id = $this->session->userdata('id_member');
		$data['posting'] = $this->ModelPosting->select_member_mobil($id)->result();
		$data['member'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('kelolaKendaraan', $data);
	}

	public function viewKelolaMotor(){
		$id = $this->session->userdata('id_member');
		$data['posting'] = $this->ModelPosting->select_member_motor($id)->result();
		$data['member'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('kelolaMotor', $data);
	}

	public function viewKelolaKb(){
		$id = $this->session->userdata('id_member');
		$data['posting'] = $this->ModelPosting->select_member_kb($id)->result();
		$data['member'] = $this->ModelUser->get_user($id)->result();
		$this->load->view('kelolaKb', $data);
	}

	public function viewKelolaJadwal(){
		$this->load->view('kelolaJadwal');
	}



}
