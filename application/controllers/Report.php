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

	public function reviewreport(){
		$data['data'] = $this->db->get_where('trx_report',['status'=>'Submitted'])->result();

		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/review-report',$data);
		$this->load->view('global/foot');
	}

	public function reviewreportkemahasiswaan(){
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/review-report-kmhs');
		$this->load->view('global/foot');
	}

	public function riwayatreportdosen(){
		$statuses = array('Accepted Report', 'Rejected Report');
		$this->db->where_in('status', $statuses);
		$data['data'] = $this->db->get('trx_report')->result();
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/riwayat-report-dosen', $data);
		$this->load->view('global/foot');
	}
	
	public function detailreport2($id){
		$data['data'] = $this->db->get_where('trx_report',['id'=>$id])->row();
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/detailreport2',$data);
		$this->load->view('global/foot');
	}

	public function detailreport($id = ""){
		if ($id!="") {
			$data['data'] = $this->db->get_where('trx_report',['id'=>$id])->row();
		}else{
			$data['data'] = null;
		}

		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/detailreport',$data);
		$this->load->view('global/foot');
	}

	public function editreport($id){
		$data['data'] = $this->db->get_where('trx_report',['id'=>$id])->row();
		
		$this->form_validation->set_rules('jenis_laporan',"Jenis Laporan",'required');
		$this->form_validation->set_rules('keterangan',"Keterangan",'required');
		if ($this->form_validation->run()) {
			$config['upload_path']   ='./assets/bukti/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
			$config['max_size']      = 10048; 
			$config['encrypt_name']  = TRUE;

			$this->load->library('upload', $config);
			$dataUpdate = [
				'jenis_laporan' => $this->input->post('jenis_laporan'),
				'keterangan' => $this->input->post('keterangan'),
				'status' =>$this->input->post('status'),
				'tanggal'=>date('Y-m-d'),
				'user' => $this->session->userdata('username')
			];
			if ($this->upload->do_upload('bukti_laporan')) {
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$dataUpdate['bukti_laporan'] = $file_name;
				$file_path = FCPATH . 'assets/bukti/' . $data['data']->bukti_laporan;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
			}
			
			$this->db->update("trx_report",$dataUpdate,['id'=>$id]);
			return redirect(base_url('Report/myreport'));
		}
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/editreport', $data);
		$this->load->view('global/foot');
	}

	public function reportmhs(){
		$this->form_validation->set_rules('jenis_laporan',"Jenis Laporan",'required');
		$this->form_validation->set_rules('keterangan',"Keterangan",'required');
		if ($this->form_validation->run()) {
			$config['upload_path']   ='./assets/bukti/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
			$config['max_size']      = 10048; 
			$config['encrypt_name']  = TRUE;

			$this->load->library('upload', $config);
			$data = [
				'jenis_laporan' => $this->input->post('jenis_laporan'),
				'keterangan' => $this->input->post('keterangan'),
				'status' =>$this->input->post('status'),
				'tanggal'=>date('Y-m-d'),
				'user' => $this->session->userdata('username')
			];
			if ($this->upload->do_upload('bukti_laporan')) {
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$data['bukti_laporan'] = $file_name;
			}
			$this->db->insert("trx_report",$data);
			return redirect(base_url('Report/myreport'));
		}
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/report-mhs');
		$this->load->view('global/foot');
	}

	function delete($id){
		$data = $this->db->get_where('trx_report',['id'=>$id])->row();
		$file_path = FCPATH . 'assets/bukti/' . $data->bukti_laporan;
		if (file_exists($file_path)) {
			unlink($file_path);
		}
		$this->db->where('id',$id);
		$this->db->delete('trx_report');
		return redirect(base_url('Report/myreport'));
	}

	public function myreport(){
		$data['data'] = $this->db->get_where('trx_report',['user'=>$this->session->userdata('username')])->result();
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/myreport',$data);
		$this->load->view('global/foot');
	}

	public function riwayatreportkmhs(){
		$this->load->view('global/head');
		$this->load->view('global/navbar');
		$this->load->view('modul-report/riwayat-report-kmhs');
		$this->load->view('global/foot');
	}

	public function changeStatus()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->db->update('trx_report',['status'=>$status],['id'=>$id]);

		echo 'ok';
	}
}
