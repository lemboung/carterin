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
	public function index()
	{

	}

	public function login(){
		$username = $_POST['username'];
		$data = $this->Cmodel->GetMember($username);
		if (empty($data)) {
			?>
			<script type = "text/javascript">
				document.location = '<?php echo base_url(); ?>index.php/';
				alert("koneksi database gagal");
			</script>
			<?php
		} else {
			foreach ($data as $d) {
				$username=$d['username'];
				$pass=$d['pass'];
			}

			if (isset($_POST['username']) && isset($_POST['password'])) {
				$u = $_POST['username'];
				$p = $_POST['password'];
				$p = md5($p);
				if ($u==$username && $p==$pass) {
					$_SESSION["username"]=$username;
					redirect('Halaman');
				} else {
					?>
					<script type = "text/javascript">
						document.location = '<?php echo base_url(); ?>index.php/';
						alert("Username atau Password salah !");
					</script>
					<?php
				}
			}
		}
	}
	public function logout(){
		session_destroy();
		redirect('Halaman');
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



}
