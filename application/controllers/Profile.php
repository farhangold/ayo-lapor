<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function Profilepage()
    {
        // Data profil
        $data['profile'] = array(
            'first_name' => 'Usep',
            'last_name' => 'Randana',
            'email' => 'usepR@example.com',
            'city' => 'Kost Pink House',
            'country' => 'Indonesia',
            'description' => 'Saya Adalah Seorang Mahasiswa Di Telkom University!'
        );

        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
    public function ProfilepageDosen()
    {
        // Data profil
        $data['profile'] = array(
            'first_name' => 'Joko',
            'last_name' => 'Anwar',
            'email' => 'jokoWar@example.com',
            'city' => 'Tegal',
            'country' => 'Indonesia',
            'description' => 'Saya Adalah Seorang Dosen Wali Di Telkom University!'
        );

        $this->load->view('global/head');
        $this->load->view('global/navbar');
        $this->load->view('modul-profile/profile_Dosen', $data); // Melewatkan data profil ke view
        $this->load->view('global/foot');
    }
}
?>
