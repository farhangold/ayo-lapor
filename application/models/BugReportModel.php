<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BugReportModel extends CI_Model {

    public function insert($data)
    {
        if ($data['subject'] != null) {            
            $this->db->insert('bug_report', $data);
            return true; 
        }else{
            return false;
        }
    }
    public function update($data,$id)
    {
        if ($id != null && $id != 0) {            
            $this->db->update('bug_report', $data,['id'=>$id]);
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        if ($id != null && $id != 0) {    
            $this->db->where('id',$id);        
            $this->db->delete('bug_report');
            return true;
        }else{
            return false;
        }
    }

    public function getById($id)
    {
        if ($id != null && $id != 0) {         
            $data = $this->db->get_where('bug_report',['id'=>$id])->row();
            return $data;
        }else{
            return null;
        }
    }

    public function getAll()
    {        
        $data = $this->db->get('bug_report')->result();
        return $data;
    }
}