<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

    public function insert($data)
    {
        if ($data['username'] != null) {            
            $this->db->insert('users', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('users', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('users');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('users',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }

    public function getByParam($where)
    {
        if ($where != null) {         
            $data = $this->db->get_where('users',$where);
            return $data;
        }else{
            return null;
        }
    }

    public function getAll()
    {        
        $data = $this->db->get('users')->result();
        return $data;
    }
}