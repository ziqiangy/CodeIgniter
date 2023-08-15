<?php
class Register extends CI_Controller{

    public function index(){
        echo "hello register page";
        $this->load->helper('form');
        $this->load->view('register/register');
    }

    public function insert(){
        $form_data = $this->input->post();
        
        // print_r($form_data);
        // var_dump($form_data);
        $this->load->model("Users");
        $this->Users->insert($form_data);
    }
}