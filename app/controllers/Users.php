<?php

class Users extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
      }

      public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data =[
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'télé' => trim($_POST['télé']),
                'city' => trim($_POST['city']),
                'date_de_register'=>trim(date('Y-m-d H:i:s')),
              ];

            
            if(!empty($data['name']) && !empty($data['email']) && !empty($data['password']) && !empty($data['télé']) && !empty($data['city']) ){
              if($this->userModel->register($data)){
                flash('register_success', 'You are registered and can log in');
                redirect('users/login');
              } else {
                die("failed");
              } 
            }else {
              echo"all field are required";
            }
    
        }else {
            $data =[
              'name' => '',
              'email' => '',
              'password' => '',
              'télé' => '',
              'city' => '',
            ];
            $this->view('users/register', $data);
          }
      } 
      public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data =[
              'email' => trim($_POST['email']),
              'password' => trim($_POST['password']),
            ];  
          if(!empty($data['email'])&& !empty($data['password'])){
            $logged = $this->userModel->login($data['email'], $data['password']);
            $logged1 = $this->userModel->login1($data['email'], $data['password']);
            if($logged){
              $this->createUserSession($logged);
            } else if($logged1) {
              $this->createUserSession1($logged1);
            }else{
              flash1('register_not','login not success');
              $this->view('users/login', $data);
            }
          }else{
            $this->view('users/login', $data);
          }  
            
        }else {
          $data =[
            'name' => '',
            'email' => '',
            'password' => '',
            'télé' => '',
            'city' => '',
          ];
          $this->view('users/login', $data);
        }
 }
    public function createUserSession($user){
      $_SESSION['loginAdmin'] = true;
      $_SESSION['id'] = $user->id;
      $_SESSION['email'] = $user->email;
      $_SESSION['name'] = $user->name;
        redirect('dashboards/dashboardAdmin');
    }
    public function createUserSession1($user){
      $_SESSION['User'] = true;
      $_SESSION['id'] = $user->id;
      $_SESSION['email'] = $user->email;
      $_SESSION['name'] = $user->name;
       redirect('dashboardUsers/dashboardUser');
    }
    public function logout(){
      $_SESSION['loginAdmin']=false;
      $_SESSION['User'] = false;
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('users/login');
    }

}


?>