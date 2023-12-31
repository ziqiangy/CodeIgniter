<?php
class Blogs extends CI_Model{
    public function insert($data){
        $this->db->insert("blogs",$data);
    }
    public function update($id,$data){
        $this->db->update("blogs",$data,array('id'=>$id));
    }
    public function displayWithId($id){
        $res = $this->db->get_where("blogs",array('id'=>$id),1,0)->result_array();
        return $res;
    }
    public function list($user_id){
        $res = $this->db->get_where("blogs",array('user_id'=>$user_id))->result_array();
        return $res;
    }
    public function delete($id){
        $this->db->delete("blogs",array("id"=>$id));
    }
}