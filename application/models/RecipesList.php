<?php
class RecipesList extends CI_Model{
    public function insert($data){
        $this->db->insert("recipes_list",$data);
    }
    public function update($id,$data){
        $this->db->update("recipes_list",$data,array('id'=>$id));
    }
    public function displayWithId($id){
        $res = $this->db->get_where("recipes_list",array('id'=>$id),1,0)->result_array();
        return $res;
    }
    public function list($user_id){
        $res = $this->db->get_where("recipes_list",array('user_id'=>$user_id))->result_array();
        return $res;
    }
    public function delete($id){
        $this->db->delete("recipes_list",array("id"=>$id));
    }
}