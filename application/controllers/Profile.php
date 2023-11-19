<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function Profilepage()
    {

        $user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
        $mytable = "mahasiswa";
        // Data profil
        $data['profile'] = $this->db->get_where($mytable,['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role;
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
    public function ProfilepageDosen()
    {
        $user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
        $mytable = "dosen_wali";
        // Data profil
        $data['profile'] = $this->db->get_where($mytable,['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role; 
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile_Dosen', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
    public function ProfilepageKmh()
    {
        $user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
        $mytable = "kmhs";
        // Data profil
        $data['profile'] = $this->db->get_where($mytable,['id'=>$user->parent_id])->row_array();
        $data['profile']['role'] = $user->role; 
        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile_Kmh', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
}
?>
