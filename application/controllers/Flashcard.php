<?php
class Flashcard extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
    }
    public function insertView(){
        $this->load->model("FlashCategories");
        $res_fcs = $this->FlashCategories->list($this->user_id);
        $this->load->view('templates/header');
        $this->load->view('flashcard/insertView',array("data"=>$res_fcs));
    }
    public function insertOne(){
        $form_data = $this->input->post();
        $form_data = array_filter($form_data);//remove empty string
        $data = array_merge($form_data,array("user_id"=>$this->user_id));
        $this->load->model("flashcards");
        $this->flashcards->insertOne($data);
        redirect("flashcard/displayAllList");

    }
    public function oneCardView($offset = 0){

        $this->load->model('flashcards');
        // $arr = $this->flashcards->displayOneOffset($offset,$this->user_id);
        $arr = $this->flashcards->flashWithCateOffset(intval($offset),$this->user_id);
        $countAll = $this->flashcards->countAll($this->user_id);
        [$data] = $arr;
        $data["offset"] = $offset;
        $data["count"] = $countAll;

        $this->load->view('templates/header');
        $this->load->view('flashcard/displayOneCard',$data);
    }

    public function displayAllList(){
        $this->load->model("flashcards");
        // $data = $this->flashcards->displayAll($this->user_id);
        
        
        $data_with_cata = $this->flashcards->queryAllFlashWithCate($this->user_id);

        $this->load->view('templates/header');
        $this->load->view("flashcard/displayCardList",array("data"=>$data_with_cata));
    }
    public function updateView($id){
        $this->load->model("FlashCategories");
        $res_fcs = $this->FlashCategories->list($this->user_id);

        $this->load->model("flashcards");
        $res = $this->flashcards->displayOne($id);
        [$data] = $res;

        $pack = array(
            "user_data"=>$data,
            "fcs_data"=>$res_fcs
        );
        $this->load->view('templates/header');
        $this->load->view('flashcard/updateView',$pack);
    }
    public function updateOne(){
        $form_data = $this->input->post();
        $form_data = array_filter($form_data);
        $id = $form_data["id"];
        $date = array("update_time"=>date('Y-m-d H:i:s'));
        $data = array_merge($form_data,$date);
        
        $this->load->model("flashcards");
        $this->flashcards->updateOne($id,$data);
        // $this->displayAllList();
        redirect("flashcard/displayAllList");
    }

    public function disable($id){
        $this->load->model("flashcards");
        $this->flashcards->disable($id);
        // $this->displayAllList();
        redirect("flashcard/displayAllList");


    }

    public function delete($id){
        $this->load->model("flashcards");
        $this->flashcards->deleteOne($id);
        // $this->displayAllList();
        redirect("flashcard/displayAllList");

    }
}