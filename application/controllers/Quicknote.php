<?php
class Quicknote extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
        $this->load->model("QuickNotes");
    }

    public function insert(){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            $this->load->view("templates/header");
            $this->load->view("quicknote/insert");
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            $data = array(
                "user_id" => $this->user_id,
                "content" => $form_data["content"]
            );
            // $this->load->model("FlashCategories");
            $this->QuickNotes->insert($data);
            redirect("quicknote/list");
        }
    }

    public function update($id = NULL){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            // $this->load->model("FlashCategories");
            [$data] = $this->QuickNotes->displayWithId($id);
            $this->load->view("templates/header");
            $this->load->view("quicknote/update",$data);
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            // $this->load->model("FlashCategories");
            $this->QuickNotes->update($form_data["id"],array("content"=>$form_data["content"]));
            redirect("quicknote/list");
        }
    }
    public function list(){
        $res = $this->QuickNotes->list($this->user_id);
        $this->load->view("templates/header");
        $this->load->view("quicknote/list",array("data"=>$res));
    }
    public function delete($id){
        $this->QuickNotes->delete($id);
        redirect("quicknote/list");
    }

}