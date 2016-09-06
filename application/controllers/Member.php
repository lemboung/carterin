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
