<?php
class Flashcard extends CI_Controller{
    public function insertView(){
        $this->load->view('flashcard/insertView.php');
    }
    public function insertOne(){
        $form_data = $this->input->post();
        $this->load->model("flashcards");
        $this->flashcards->insertOne($form_data);
    }
    public function oneCardView($offset){

        $this->load->model('flashcards');
        $arr = $this->flashcards->displayOneOffset($offset);
        $countAll = $this->flashcards->countAll();
        [$data] = $arr;
        $data["offset"] = $offset;
        $data["count"] = $countAll;

        // print_r($data);

        $this->load->view('flashcard/displayOneCard',$data);
    }

    public function displayAllList(){
        $this->load->model("flashcards");
        $data = $this->flashcards->displayAll();
        // var_dump(array("data"=>$data));
        $this->load->view("flashcard/displayCardList",array("data"=>$data));
    }
    public function updateView($id){
        $this->load->model("flashcards");
        $res = $this->flashcards->displayOne($id);
        [$data] = $res;
        $this->load->view('flashcard/updateView',$data);
    }
    public function updateOne(){
        $form_data = $this->input->post();
        // print_r($form_data);
        $id = $form_data["id"];
        $data = array(
            "term"=>$form_data["term"],
            "definition"=>$form_data["definition"],
            "update_time"=>date('Y-m-d H:i:s')
        );
        // print_r($id);
        // print_r($data);
        $this->load->model("flashcards");
        $this->flashcards->updateOne($id,$data);
        $this->displayAllList();
    }

    public function disable($id){
        $this->load->model("flashcards");
        $this->flashcards->disable($id);
        $this->displayAllList();

    }

    public function delete($id){
        $this->load->model("flashcards");
        $this->flashcards->deleteOne($id);
        $this->displayAllList();
    }
}