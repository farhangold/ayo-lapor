<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KemahasiswaanModel extends CI_Model {

    public function insert($data)
    {
        if ($data['first_name'] != null) {            
            $this->db->insert('kmhs', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('kmhs', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('kmhs');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('kmhs',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }
    public function getByParam($where)
    {
        if ($where != null) {         
            $data = $this->db->get_where('kmhs',$where);
            return $data;
        }else{
            return null;
        }
    }

    public function getAll()
    {        
        $data = $this->db->get('kmhs')->result();
        return $data;
    }
}