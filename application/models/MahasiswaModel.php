<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {

    public function insert($data)
    {
        if ($data['first_name'] != null) {            
            $this->db->insert('mahasiswa', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('mahasiswa', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('mahasiswa');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('mahasiswa',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }
    public function getByParam($where)
    {
        if ($where != null) {         
            $data = $this->db->get_where('mahasiswa',$where);
            return $data;
        }else{
            return null;
        }
    }

    public function getAll()
    {        
        $data = $this->db->get('mahasiswa')->result();
        return $data;
    }
}