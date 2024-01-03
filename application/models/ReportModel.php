<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {

    public function insert($data)
    {
        if ($data['jenis_laporan'] != null && $data['bukti_laporan'] != null && $data['keterangan'] != null) {            
            $this->db->insert('trx_report', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('trx_report', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('trx_report');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('trx_report',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }
    public function getByParam($where)
    {
        if ($where != null) {         
            $data = $this->db->get_where('trx_report',$where);
            return $data;
        }else{
            return null;
        }
    }
    public function getByStatusIn($status,$getbyuserlogin=0)
    {
        if ($status != null) {         
	    	$this->db->where_in('status', $status);
            if ($getbyuserlogin) {
                $this->db->where('user',$this->session->userdata('username'));
            }
            $data = $this->db->get('trx_report')->result();
            return $data;
        }else{
            return null;
        }
    }
    public function getAll()
    {        
        $data = $this->db->get('trx_report')->result();
        return $data;
    }
}