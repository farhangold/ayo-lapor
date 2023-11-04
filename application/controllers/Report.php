<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
	public function reportsuccess()
	{
		$this->load->view('modul-report/reportsuccess');
	}

	public function reviewreport(){
		$this->load->view('global/head');
		$this->load->view('global/navbardosen');
		$this->load->view('modul-report/review-report');
		$this->load->view('global/foot');
	}

	public function reviewreportkemahasiswaan(){
		$this->load->view('global/head');
		$this->load->view('global/navbarkmhs');
		$this->load->view('modul-report/review-report-kmhs');
		$this->load->view('global/foot');
	}

	public function riwayatreportdosen(){
		$this->load->view('global/head');
		$this->load->view('global/navbardosen');
		$this->load->view('modul-report/riwayat-report-dosen');
		$this->load->view('global/foot');
	}

	public function detailreportdosen(){
		$this->load->view('global/head');
		$this->load->view('global/navbardosen');
		$this->load->view('modul-report/detailreport-dosen');
		$this->load->view('global/foot');
	}

	public function reportmhs(){
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/report-mhs');
		$this->load->view('global/foot');
	}

	public function myreport(){
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/myreport');
		$this->load->view('global/foot');
	}
}
