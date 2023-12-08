<?php
class Readinglist extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
        $this->load->model("ReadingsList");
    }

    public function insert(){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            $this->load->view("templates/header");
            $this->load->view("readinglist/insert");
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            $data = array(
                "user_id" => $this->user_id,
                "name" => $form_data["name"],
                "detail" => $form_data["detail"]
            );
            
            $this->ReadingsList->insert($data);
            redirect("readinglist/list");
        }
    }

    public function update($id = NULL){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            
            [$data] = $this->ReadingsList->displayWithId($id);
            $this->load->view("templates/header");
            $this->load->view("readinglist/update",$data);
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            $data = array(
                "name" => $form_data["name"],
                "detail" => $form_data["detail"]
            );
            $this->ReadingsList->update($form_data["id"],$data);
            redirect("readinglist/list");
        }
    }
    public function list(){
        $res = $this->ReadingsList->list($this->user_id);
        $this->load->view("templates/header");
        $this->load->view("readinglist/list",array("data"=>$res));
    }
    public function delete($id){
        $this->ReadingsList->delete($id);
        redirect("readinglist/list");
    }

}