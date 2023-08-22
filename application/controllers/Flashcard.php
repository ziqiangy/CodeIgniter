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
}