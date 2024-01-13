<?php
class Todo extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
        $this->load->model("Todos");
    }

    public function insert(){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            $this->load->view("templates/header");
            $this->load->view("todo/insert");
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            //if date is null or no content, set to current time: $date = array("update_time"=>date('Y-m-d H:i:s'));
            $data = array(
                "user_id" => $this->user_id,
                "task" => $form_data["task"],
                "desc" => $form_data["desc"],
                "isdone" => $form_data["isdone"]
            );

            
            if(isset($form_data["duedate"])&&!empty($form_data["duedate"])){

                $form_data["duedate"] = date('Y-m-d H:i:s',strtotime($form_data["duedate"]));

                $data["duedate"] = $form_data["duedate"];
        
            }

            if(isset($form_data["isimportant"])&&!empty($form_data["isimportant"])){
                
                $data["isimportant"] = $form_data["isimportant"];
            }

            // var_dump($data);
            
            // var_dump($form_data["duedate"]);
            $this->Todos->insert($data);
            redirect("todo/list");
        }
    }

    public function update($id = NULL){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            
            [$data] = $this->Todos->displayWithId($id);
            if(isset($data["duedate"])&&!empty($data["duedate"])){
                $data["duedate"] = date('Y-m-d',strtotime($data["duedate"]));
            }
            
            $this->load->view("templates/header");
            $this->load->view("todo/update",$data);
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            //if date is null or no content, set to current time: $date = array("update_time"=>date('Y-m-d H:i:s'));
            
            $form_data["duedate"] = date('Y-m-d H:i:s',strtotime($form_data["duedate"]));
            $data = array(
                "task" => $form_data["task"],
                "desc" => $form_data["desc"],
                "duedate" => $form_data["duedate"],
                "isdone" => $form_data["isdone"]
            );
            if(isset($form_data["isimportant"])){
                
                $data["isimportant"] = $form_data["isimportant"];
                echo $form_data["isimportant"];
            }
            // var_dump($data);
            $this->Todos->update($form_data["id"],$data);
            redirect("todo/list");
        }
    }
    public function list(){
        $res = $this->Todos->list($this->user_id);
        $this->load->view("templates/header");
        $this->load->view("todo/list",array("data"=>$res));
    }
    public function delete($id){
        $this->Todos->delete($id);
        redirect("todo/list");
    }

}