<?php
class Users extends CI_Model{
    

    public function insertOneUser($data){
        
        
        $this->db->insert('users',$data);
    }

    public function searchByUsername($data){
        // print_r($data);
        $res= $this->db->select('*')->where('username',$data)->get('users')->result_array();
        // $query = $this->db->get('users');
        // return $query;
        // print_r($res);
        return $res;
        
    }
}