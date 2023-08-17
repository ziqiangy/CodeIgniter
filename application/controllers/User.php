<?php
class User extends CI_Controller{

    public function registerView(){
        // echo "hello register page";
        $this->load->helper('form');
        $this->load->view('user/registerView');
    }

    public function register(){
        $form_data = $this->input->post();
        //salt and hash the password before save
        $salt1 = "qzu$<.";
        $salt2 = "p1g!~*";
        $tempPass = $form_data['password'];
        $form_data['password'] = hash("ripemd128","$salt1$tempPass$salt2");
        //end salt and hash
        
        // print_r($form_data);
        $this->load->model("Users");
        $this->Users->insertOneUser($form_data);
    }

    public function loginView(){
        $this->load->helper('form');
        $this->load->view('user/loginView');
    }

    public function login(){
        $form_data = $this->input->post();

        $salt1 = "qzu$<.";
        $salt2 = "p1g!~*";
        $tempPass = $form_data['password'];
        $form_data['password'] = hash("ripemd128","$salt1$tempPass$salt2");

        $this->load->model("Users");
        $userData = $this->Users->searchByUsername($form_data['username']);

        // var_dump($userData);

        //validate if username's password match
        if($userData[0]['password'] == $form_data['password']){
            echo "match, save username and id to session";
        }else{
            echo "not match, username or password incorrect";
        }
        
        
    }
}