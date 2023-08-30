<?php
class Flashcard extends CI_Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if(!isset($_SESSION['user_id'])) {
            echo "Not authorized user<br>";
            echo anchor('user/login','Go Login');
            exit;
        };
    }
    public function insertView(){
        $this->load->view('templates/header');
        $this->load->view('flashcard/insertView');
    }
    public function insertOne(){
        $form_data = $this->input->post();
        $data = array_merge($form_data,array("user_id"=>$_SESSION["user_id"]));
        $this->load->model("flashcards");
        $this->flashcards->insertOne($data);
        $this->displayAllList();
    }
    public function oneCardView($offset = 0){

        $this->load->model('flashcards');
        $arr = $this->flashcards->displayOneOffset($offset);
        $countAll = $this->flashcards->countAll();
        [$data] = $arr;
        $data["offset"] = $offset;
        $data["count"] = $countAll;

        // print_r($data);
        $this->load->view('templates/header');
        $this->load->view('flashcard/displayOneCard',$data);
    }

    public function displayAllList(){
        $this->load->model("flashcards");
        $data = $this->flashcards->displayAll();
        // var_dump(array("data"=>$data));
        $this->load->view('templates/header');
        $this->load->view("flashcard/displayCardList",array("data"=>$data));
    }
    public function updateView($id){
        $this->load->model("flashcards");
        $res = $this->flashcards->displayOne($id);
        [$data] = $res;
        $this->load->view('templates/header');
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