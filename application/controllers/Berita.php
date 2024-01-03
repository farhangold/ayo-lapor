<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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

	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('BeritaModel','model');
	 }
	public function Beritapage()
	{
		$data['data'] = $this->db->get('news')->result();
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/berita',$data);
		$this->load->view('global/foot');
	}
	public function BeritaShowPage()
	{
		$data['data'] = $this->db->get('news')->result();
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/beritashow',$data);
		$this->load->view('global/foot');
	}
	public function add()
	{
		$this->form_validation->set_rules('title',"title",'required');
		if ($this->form_validation->run()) {
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'created_at'=>date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('username')
			];
			$this->model->insert($data);
			return redirect(base_url('Berita/Beritapage'));
		}
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/add');
		$this->load->view('global/foot');
	}
	public function edit($id)
	{
		$this->form_validation->set_rules('title',"title",'required');
		if ($this->form_validation->run()) {
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description')
			];
			$this->model->update($data,$id);
			return redirect(base_url('Berita/Beritapage'));
		}
		$data['data'] = $this->model->getById($id);
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/edit',$data);
		$this->load->view('global/foot');
	}
	public function detail($id)
	{
		$data['data'] = $this->model->getById($id);
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/detail',$data);
		$this->load->view('global/foot');
	}
	public function show($id)
	{
		$data['data'] = $this->model->getById($id);
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-berita/show',$data);
		$this->load->view('global/foot');
	}
	public function delete($id)
	{
		$this->model->delete($id);
		return redirect(base_url('Berita/Beritapage'));
	}
}
