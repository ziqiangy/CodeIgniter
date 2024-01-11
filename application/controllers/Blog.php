<?php
class Blog extends CI_Controller{
    public $user_id;
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata("auth",'Not authorized user, login first');
            redirect('user/login');
            exit;
        };
        $this->user_id = $_SESSION['user_id'];
        $this->load->model("Blogs");
    }

    public function insert(){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            $this->load->view("templates/header");
            $this->load->view("blog/insert");
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            //if date is null or no content, set to current time: $date = array("update_time"=>date('Y-m-d H:i:s'));
            $data = array(
                "user_id" => $this->user_id,
                "title" => $form_data["title"],
                "content" => $form_data["content"]
            );
            if(!empty($form_data["date"])){
                $data["date"] = form_data["date"];
            }
            // var_dump($data);
            
            // var_dump($data);
            $this->Blogs->insert($data);
            redirect("blog/list");
        }
    }

    public function update($id = NULL){
        if($this->input->server("REQUEST_METHOD")=="GET"){
            
            [$data] = $this->Blogs->displayWithId($id);
            if(isset($data["date"])){
                $data["date"] = date('Y-m-d',strtotime($data["date"]));
            }
            
            $this->load->view("templates/header");
            $this->load->view("blog/update",$data);
        }elseif($this->input->server("REQUEST_METHOD")=="POST"){
            $form_data = $this->input->post();
            //if date is null or no content, set to current time: $date = array("update_time"=>date('Y-m-d H:i:s'));
            
            
            // $data = array(
            //     "title" => $form_data["title"],
            //     "content" => $form_data["content"],
            //     "date" => $form_data["date"]
            // );


            $data = array(
                "title" => $form_data["title"],
                "content" => $form_data["content"]
            );
            if(!empty($form_data["date"])){
                $form_data["date"] = date('Y-m-d',strtotime($form_data["date"]));
                $data["date"] = form_data["date"];
            }
            // var_dump($data);
            $this->Blogs->update($form_data["id"],$data);
            redirect("blog/list");
        }
    }
    public function list(){
        $res = $this->Blogs->list($this->user_id);
        $this->load->view("templates/header");
        $this->load->view("blog/list",array("data"=>$res));
    }
    public function delete($id){
        $this->Blogs->delete($id);
        redirect("blog/list");
    }

}