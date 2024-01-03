<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilesModel extends CI_Model {

    public function insert($data)
    {
        if ($data['first_name'] != null) {            
            $this->db->insert('profiles', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('profiles', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('profiles');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('profiles',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }
    public function getAll()
    {        
        $data = $this->db->get('profiles')->result();
        return $data;
    }
}