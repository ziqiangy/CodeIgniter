<?php
class Flashcards extends CI_Model{
    public function insertOne($data){
        $this->db->insert('flashcards',$data);
    }

    public function updateOne($id,$data){
        $this->db->update('flashcards',$data,array('id'=>$id));
    }

    public function displayOne($id){
        $res = $this->db->get_where('flashcards',array('id'=>$id),1,0)->result_array();
        return $res;

    }

    public function displayOneOffset($offset, $user_id){
        $res = $this->db->where('user_id',$user_id)->get('flashcards',1,$offset)->result_array();
        return $res;
    }

    public function countAll($user_id){
        $res = $this->db->where('user_id',$user_id)->count_all_results('flashcards');
        return $res;
    }

    public function displayAll($user_id){
        $res = $this->db->where('user_id',$user_id)->get('flashcards')->result_array();
        return $res;
    }

    public function deleteOne($id){
        $this->db->delete('flashcards',array('id'=>$id));

    }
    public function disable($id){
        $data = array(
            "is_active"=> 0,
        );
        $this->db->update('flashcards',$data,array('id'=>$id));
    }
}