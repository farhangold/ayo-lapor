<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaModel extends CI_Model {

    public function insert($data)
    {
        if ($data['title'] != null && $data['description'] != null) {            
            $this->db->insert('news', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('news', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('news');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('news',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }
    public function getAll()
    {        
        $data = $this->db->get('news')->result();
        return $data;
    }
}