<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$email = $this->input->post('email', 'true');
		$p = $this->input->post('password', 'true');
		$password = md5($p);
		$temp_account = $this->ModelUser->check_user_account($email, $password)->row();
		// check account
		$num_account = count($temp_account);

		if ($num_account > 0){
		// kalau ada set session
			if ($temp_account->active) {
				$array_items = array(
					'id_member' => $temp_account->id_member,
					'username' => $temp_account->username,
					'logged_in' => true,
					'level' => $temp_account->level
					);
					$this->session->set_userdata($array_items);
					if ($array_items['level'] == 2) {
						echo "admin";
					}else {
						echo "ok";
					}
			}else{
				echo "inactive";
			}
			
			
		}
		else {
		// kalau ga ada diredirect lagi ke halaman login
			echo "username atau email tidak cocok";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Home'));
	}

	public function coba(){
		$print = $this->input->post('password');
		echo md5($print);
	}

	public function emailunique()
	{
		$email = $this->input->post('email');
		if ($this->ModelUser->checkUniqueEmail($email)) {
			echo "true";
		}else {
			echo "false";
		}
		
	}

	public function register(){
		$data['username'] = $this->input->post('username');
		$pass = $this->input->post('password');
		$data['pass'] = md5($pass);
		$data['email'] = $this->input->post('email');
		$data['nama'] = $this->input->post('nama');
		$data['kota'] = $this->input->post('kota');
		$data['level'] = 1;
		$data['hash'] = md5(time().rand(0,1000));
		
		$this->ModelUser->insert_user($data);

		$to      = $data['email']; // Send email to our user
		$subject = 'Verifikasi pendaftaran'; // Give the email a subject 
		$message = '
		 
		Terima kasih telah mendaftar
		Akun anda telah dibuat, berikut adalah detail akun:
		 
		------------------------
		Username: '.$data['username'].'
		Nama: '.$data['nama'].'
		------------------------
		 
		langkah selanjutnya adalah mengaktifkan akun anda dengan menekan tautan berikut:
		'.base_url('User/activation/').$data['hash'].'
		 
		Terima Kasih,
		Salam
		'; // Our message above including the link
							 
		$headers = 'From: lemboung.ignite@gmail.com' . "\r\n".
		'Reply-To: lemboung.ignite@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion(); // Set from headers
		mail($to, $subject, $message, $headers); // Send our email
		echo "ok";
	}

	public function activation($hash){
		$temp_account = $this->ModelUser->check_activation($hash)->row();
		// check account
		if(!empty($temp_account)){
			$this->ModelUser->activating($hash);
			redirect(site_url("halaman/daftar/process"));
		}

	}

}
