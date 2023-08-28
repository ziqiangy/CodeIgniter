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
                    //data is validate and save to database
                    $form_data = $this->input->post();
                    //salt and hash the password before save
                    $salt1 = "qzu$<.";
                    $salt2 = "p1g!~*";
                    $tempPass = $form_data['password'];
                    $form_data['password'] = hash("ripemd128","$salt1$tempPass$salt2");
                    // print_r($form_data);
                    $this->load->model("Users");
                    $this->Users->insertOneUser($form_data);
                    //load loginView, if we use load->view here, the url not going to change to user/loginView
                    // $this->load->view('user/loginView');
                    redirect('/user/loginView', 'refresh');
                }
         }       
    }

    public function email_check($str){
        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-~]).{8,}$/",$str)){
            $this->form_validation->set_message('email_check', '%s is too simple');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function loginView(){
        $this->load->view('user/loginView');
    }

    public function login(){
        $form_data = $this->input->post();
        $this->load->model("Users");
        $db_data = $this->Users->searchByUsername($form_data['username']);

        if($db_data){
            if($db_data[0]['is_active']==0) die("The user account is closed, please contact admin");
            $this->validateLogin($form_data,$db_data[0]);
        }else {
            $db_data = $this->Users->searchByEmail($form_data['username']);
            if($db_data[0]['is_active']==0) die("The user account is closed, please contact admin");
            $db_data ? $this->validateLogin($form_data,$db_data[0]) : die("not find email");
        }
        
    }

    public function profileView(){
        session_start();
        if(!$_SESSION['user_id']) die("not authorized user, login first");
        $this->load->model("Users");
        $user_data = $this->Users->searchCurrentUser($_SESSION['user_id']);
        // print_r($user_data);
        $this->load->view('user/profileView',$user_data[0]);
    }

    public function forgetPasswordView(){
        $this->load->view('user/forgetPasswordView');
    }

    public function newPasswordEnterView(){
        $this->load->view('user/newPasswordEnterView');
    }

    public function forgetPassword(){
        $form_data = $this->input->post();
        // var_dump($form_data['email']);
        $this->load->model("Users");
        $res = $this->Users->searchByEmail($form_data['email']);
        $this->load->view("User/newPasswordEnterView",array('id'=>$res[0]['id']));
    }

    public function newPassword(){
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
        $this->loginView();
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
        $this->profileView();
    }

    public function logout(){
        session_start();
        session_destroy();
        echo "I am logged out, please login again";
        $this->loginView();
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


    /**
     * a function for login, input formdata and dbData[0]~ the only one row search user result
     */
    public function validateLogin($formData,$dbData){
        $salt1 = "qzu$<.";
        $salt2 = "p1g!~*";
        $formPassword = $formData['password'];
        $formPassword = hash("ripemd128","$salt1$formPassword$salt2");
        if($formPassword == $dbData['password']){
            session_start();
            $_SESSION['user_id']=$dbData['id'];
            $_SESSION['username']=$dbData['username'];
            echo "welcome ".$_SESSION['username'];
            echo "<br>";
            echo "<a href='".base_url('index.php/user/profileView')."'>Go Profile View</a>";
        }else{die("username or password incorrect");}
    }
}