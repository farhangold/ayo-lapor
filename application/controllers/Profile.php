<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct() {
		parent::__construct();

		if($this->session->userdata('username') == null){
			redirect(base_url('login/LoginPage'));
		}
        $this->load->model('UsersModel','model');
        $this->load->model('MahasiswaModel','mhs_model');
        $this->load->model('DosenWaliModel','ds_model');
        $this->load->model('KemahasiswaanModel','kmhs_model');
	}

    public function Profilepage()
    {

        $user = $this->model->getByParam(['username'=>$this->session->userdata('username')])->row();
        $mytable = "mahasiswa";
        // Data profil
        $data['profile'] = $this->mhs_model->getByParam(['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role;
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
    public function ProfilepageDosen()
    {
        $user = $this->model->getByParam(['username'=>$this->session->userdata('username')])->row();
        $mytable = "dosen_wali";
        // Data profil`
        $data['profile'] = $this->ds_model->getByParam(['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role; 
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile_Dosen', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
    public function ProfilepageKmh()
    {
        $user = $this->model->getByParam(['username'=>$this->session->userdata('username')])->row();
        $mytable = "kmhs";
        // Data profil
        $data['profile'] = $this->kmhs_model->getByParam(['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role; 
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile_Kmh', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
}
?>
