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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('username')){
			$data = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
			$myurl = "";
			if ($data->role === "Mahasiswa") {
				$myurl = base_url('Dashboard/DasboardPage'); 
			}else if ($data->role === "Dosen Wali") {
				$myurl = base_url('Dashboard/DasboardDosen'); 
			}else if ($data->role === "Kemahasiswaan") {
				$myurl = base_url('Dashboard/DasboardKemahasiswaan'); 
			}
			redirect($myurl);
		}
	}
	public function LoginPage()
	{
		$this->load->view('modul-login/login');
		$this->load->view('global/foot');
	}

	function regisUser() {
		$data = [
			'username' => 'admin',
			'password' => password_hash("password",PASSWORD_DEFAULT),
			'role'=> "Kemahasiswaan"
		];
		$this->db->insert('users',$data);
	}
	public function check_login() {
		$where = [
			'username' => $this->input->post('username'),
			'role'=> $this->input->post('role')
		];
        $query = $this->db->get_where('users',$where);
        
        if ($query->num_rows() > 0) {
			$data = $query->row();
			if (password_verify($this->input->post('password'),$data->password)) {
				$this->session->set_userdata(['username'=>$this->input->post('username')]);
				echo json_encode(['status'=>true,'message'=>'Login Berhasil!']);
			}else{
				echo json_encode(['status'=>false,'message'=>'Password Salah!']);
			}
        } else {
			echo json_encode(['status'=>false,'message'=>'Username '.$this->input->post('username').' dengan role '.$this->input->post('role').' tidak ditemukan!']);
        }
    }
}
