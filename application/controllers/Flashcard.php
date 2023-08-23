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
}