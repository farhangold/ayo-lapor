<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		if($this->session->userdata('username') == null){
			redirect(base_url('login/LoginPage'));
		}
	}
	public function setting()
	{
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-settings/settingPage');
		$this->load->view('global/foot');
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('login/LoginPage'));
	}

	public function faq()
	{
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-settings/faq');
		$this->load->view('global/foot');
	}

	public function reportBug()
	{
		$data['success_message'] = $this->session->flashdata('success_message');

		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-settings/bugs');
		$this->load->view('global/foot');
	}

	public function submit_bug() {
        $bug_subject = $this->input->post('bug_subject');
        $bug_description = $this->input->post('bug_description');

        // Validasi data
        if ($bug_subject !== null && $bug_description !== null) {
            // Load model jika diperlukan
            // Contoh: $this->load->model('bug_model');

            // Simpan data ke database
            $bugData = array(
                'subject' => $bug_subject,
                'description' => $bug_description,
                // tambahkan kolom lain sesuai kebutuhan
            );

            $this->db->insert('bug_report', $bugData);
			$this->session->set_flashdata('message', ' <div class="alert alert-success">Bug berhasil dilaporkan!</div>');

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>');
        }
		return redirect(base_url('Settings/setting'));
    }
}
