<?php
class User extends CI_Controller{

    public function register(){

        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            $this->load->view('user/register');
         } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            //set validation rules;
            $this->form_validation->set_rules("firstname","Firstname","trim|required|min_length[3]");
            $this->form_validation->set_rules("lastname","Lastname","trim|required|min_length[3]");
            $this->form_validation->set_rules("username","Username","trim|required|min_length[3]|is_unique[users.username]");
            $this->form_validation->set_rules("password","Password","trim|required|callback_email_check");
            $this->form_validation->set_rules("email","Email","trim|required|valid_email|is_unique[users.email]");

            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('user/register');
                }else{
                    $form_data = $this->input->post();
                    $form_data['password'] = $this->hashPass($form_data['password']);
                    $this->load->model("Users");
                    $this->Users->insertOneUser($form_data);
                    redirect('/user/login', 'refresh');
                }
         }       
    }

    /**
     * tool
     */
    public function email_check($str){
        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-~]).{8,}$/",$str)){
            $this->form_validation->set_message('email_check', '%s is too simple');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function login(){
        if($this->input->server('REQUEST_METHOD')==='GET'){
            $this->load->view('user/login');
        }
        elseif ($this->input->server('REQUEST_METHOD')==='POST')
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model("Users");

            if($this->Users->searchByUsername($username)||$this->Users->searchByEmail($username)){
                $this->Users->searchByUsername($username) ? [$data] = $this->Users->searchByUsername($username) : [$data] = $this->Users->searchByEmail($username);
                if($data['is_active']==1) {
                    $formPass = $this->hashPass($password);
                    $dbPass = $data['password'];
                    if($dbPass==$formPass){
                        session_start();
                        $_SESSION['user_id']=$data['id'];
                        $_SESSION['username']=$data['username'];
                        redirect('user/profile','refresh');
                    }
                    else{
                        $this->load->view('user/login',array('err'=>'Wrong password, please re-enter your password'));
                    }
                } 
                else{
                    $this->load->view('user/login',array('err'=>'The user account is closed, please contact admin'));
                }
            }
            else{
                $this->load->view('user/login',array('err'=>'username or email not exist'));
            }  
        }
    }

    /**
     * tool
     */
    public function hashPass($formPass){
        $salt1 = "qzu$<.";
        $salt2 = "p1g!~*";
        $pass = $formPass;
        $hashPass = hash("ripemd128","$salt1$pass$salt2");
        return $hashPass;
    }


    public function profile(){
        session_start();
        if(!$_SESSION['user_id']) redirect('/user/login', 'refresh');
        $this->load->model("Users");
        [$data] = $this->Users->searchCurrentUser($_SESSION['user_id']);
        $this->load->view('user/profile',$data);
    }

    public function forgetPassword(){
        if($this->input->server('REQUEST_METHOD')==='GET'){
            $this->load->view('user/forgetPassword');
        } elseif ($this->input->server('REQUEST_METHOD')==='POST') {
            $form_data = $this->input->post();
            // var_dump($form_data['email']);
            $this->load->model("Users");
            [$res] = $this->Users->searchByEmail($form_data['email']);
            $this->load->view("user/newPassword",array('id'=>$res['id']));    
        }
        
    }

    public function newPassword(){
        if($this->input->server("REQUEST_METHOD")==="GET"){
            $this->load->view('user/newPassword');
        } elseif ($this->input->server('REQUEST_METHOD')==="POST"){
            $form_data = $this->input->post();
            // var_dump($form_data['password']);
    
            if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-~]).{8,}$/",$form_data['password'])) die("password too weak");
    
    
            $salt1 = "qzu$<.";
            $salt2 = "p1g!~*";
            $tempPass = $form_data['password'];
            $form_data['password'] = hash("ripemd128","$salt1$tempPass$salt2");
    
            $id = $form_data['id'];
            $data = array(
                'password'=>$form_data['password']
            );
            $this->load->model("Users");
            $this->Users->updateCurrentUserFields($id,$data);
            echo "password reset success <br>";
            redirect('/user/login', 'refresh');
    
        }

    }

    public function update(){
        $form_data = $this->input->post();
        // print_r($form_data);
        $id = $form_data["id"];
        $data = array(
            "firstname"=>$form_data["firstname"],
            "lastname"=>$form_data['lastname'],
            "update_time"=>date('Y-m-d H:i:s')
        );

        $this->load->model('Users');
        $this->Users->updateCurrentUserFields($id,$data);
        $this->profile();
    }

    public function logout(){
        session_start();
        session_destroy();
        echo "I am logged out, please login again";
        redirect('user/login','refresh');
        // print_r($_session['user_id']);
    }

    public function deactivate(){
        session_start();
        $id = $_SESSION["user_id"];
        session_destroy();
        $this->load->model("Users");
        $this->Users->deactivateUser($id);
        echo "User deactiveated";

    }


    
}