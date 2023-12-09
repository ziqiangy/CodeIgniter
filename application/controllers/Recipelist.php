<?php
class Recipelist extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
        $this->load->model("RecipesList");
    }

    public function insert(){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            $this->load->view("templates/header");
            $this->load->view("recipelist/insert");
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            $data = array(
                "user_id" => $this->user_id,
                "name" => $form_data["name"],
                "detail" => $form_data["detail"]
            );
            
            $this->RecipesList->insert($data);
            redirect("recipelist/list");
        }
    }

    public function update($id = NULL){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            
            [$data] = $this->RecipesList->displayWithId($id);
            $this->load->view("templates/header");
            $this->load->view("recipelist/update",$data);
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            $data = array(
                "name" => $form_data["name"],
                "detail" => $form_data["detail"]
            );
            $this->RecipesList->update($form_data["id"],$data);
            redirect("recipelist/list");
        }
    }
    public function list(){
        $res = $this->RecipesList->list($this->user_id);
        $this->load->view("templates/header");
        $this->load->view("recipelist/list",array("data"=>$res));
    }
    public function delete($id){
        $this->RecipesList->delete($id);
        redirect("recipelist/list");
    }

}