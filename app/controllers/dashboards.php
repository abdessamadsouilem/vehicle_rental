<?php 

class dashboards extends Controller {
    public function __construct(){
        $this->dashboardModel = $this->model('dashboard');
      }

    public function dashboardAdmin(){
         if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
             $this->view("dashboards/dashboardAdmin");
         }else{
             redirect("users/login");
         }
        
    }


}