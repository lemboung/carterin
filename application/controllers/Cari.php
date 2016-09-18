2<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

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
		$this->load->model('Cmodel');
		$this->load->model('modelPosting');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// $this->load->library('input');
	}

	public function index()
	{
		$this->load->view('listKendaraan');
	}

	public function detailKendaraan($id){
		$data['kendaraan'] = $this->ModelPosting->select_by_id($id)->result();
		$this->load->view('detailKendaraan', $data);
	}

	public function prosesPencarian(){
		$cari['cari'] = $this->input->post('cari');
		$cari['awal'] = $this->input->post('awal');
		$cari['akhir'] = $this->input->post('akhir');
		$cari['jenis'] = $this->input->post('jenis');
		$cari['kota'] = $this->input->post('kota');
		// $day = date('Y', strtotime($awal));
		$cari['query'] = str_replace(" ", "|", $cari['cari']);

		$data['hasil'] = $this->Cmodel->getCari($cari);
		// print_r($hasil);
		$this->load->view('listKendaraan', $data);


	}
}
