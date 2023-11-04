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

	public function settingdsn()
	{
		$this->load->view('global/head');
		$this->load->view('global/navbardosen');
		$this->load->view('modul-settings/settingdsn');
		$this->load->view('global/foot');
	}

	public function settingkmh()
	{
		$this->load->view('global/head');
		$this->load->view('global/navbarkmhs');
		$this->load->view('modul-settings/settingkmh');
		$this->load->view('global/foot');
	}
	function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('login/LoginPage'));
	}
}
