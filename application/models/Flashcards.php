<?php
class Flashcards extends CI_Model{
    public function insertOne($data){
        $this->db->insert('flashcards',$data);
    }

    public function updateOne($id,$data){
        $this->db->update('flashcards',$data,array('id',$id));
    }

    public function displayOne($id){
        $res = $this->db->get_where('flashcards',array('id',$id),1)->result_array();
        return $res;

    }

    public function displayOneOffset($offset){
        $res = $this->db->get('flashcards',1,$offset)->result_array();
        return $res;
    }

    public function countAll(){
        $res = $this->db->count_all_results('flashcards');
        return $res;
    }

    public function displayAll(){
        $res = $this->db->get('flashcards')->result_array();
        return $res;
    }

    public function deleteOne($id){
        $this->db->delete('flashcards',array('id',$id));

    }
}