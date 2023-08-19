<?php
class User extends CI_Controller{

    public function registerView(){
        // echo "hello register page";
        $this->load->helper('form');
        $this->load->view('user/registerView');
    }

    public function register(){
        $form_data = $this->input->post();
        
        //check first, last, username, password, email exist, if not die the script with error.

        if(strlen($form_data['firstname'])<3) die("firstname can't be less than 3 characters");
        if(strlen($form_data['lastname'])<3) die("lastname can't be less than 3 characters");
        if(strlen($form_data['username'])<3) die("username can't be less than 3 characters");
        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-~]).{8,}$/",$form_data['password'])) die("password too weak");
        if(!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) die("email format is not validate");



        //salt and hash the password before save
        $salt1 = "qzu$<.";
        $salt2 = "p1g!~*";
        $tempPass = $form_data['password'];
        $form_data['password'] = hash("ripemd128","$salt1$tempPass$salt2");


        // print_r($form_data);
        $this->load->model("Users");
        $this->Users->insertOneUser($form_data);


        $this->loginView();
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
            //match, save username and id to session


            
            session_start();
            $_SESSION['user_id']=$userData[0]['id'];
            $_SESSION['username']=$userData[0]['username'];
            echo "welcome ".$_SESSION['username'];
            echo "<br>";

            echo "<a href='".base_url('index.php/user/profileView')."'>Go Profile View</a>";



            /**
             * just the second way to do session in CIframework
             */
        //     $this->load->library('session');
        //     $newdata = array(
        //         'user_id'  => $userData[0]['id'],
        //         'username'     => $userData[0]['username']
        // );
        // $this->session->set_userdata($newdata);
            
        }else{
            die("username or password incorrect");
            //not match, username or password incorrect
        }
        
        
    }

    public function profileView(){
        session_start();
        if(!$_SESSION['user_id']) die("not authorized user, login first");
        $this->load->model("Users");
        $user_data = $this->Users->searchCurrentUser($_SESSION['user_id']);
        // print_r($user_data);

        $this->load->helper('form');
        $this->load->view('user/profileView',$user_data[0]);
    }

    public function update(){
        $form_data = $this->input->post();
        // print_r($form_data);
        $id = $form_data["id"];
        $data = array("firstname"=>$form_data["firstname"],
                                "lastname"=>$form_data['lastname']);

        $this->load->model('Users');
        $this->Users->updateCurrentUserFields($id,$data);
        $this->profileView();
    }

    public function logout(){
        session_start();
        session_destroy();
        echo "I am logged out, please login again";
        $this->loginView();
        // print_r($_session['user_id']);
    }
}