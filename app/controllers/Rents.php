<?php 

class Rents extends Controller {
    public function __construct(){
        $this->RentModel = $this->model('Rent');
      }


    public function RentVehicle(){
        if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
            $id=$_GET['id']; 
            $id1=$_SESSION['id'];
    $update = $this->RentModel->getInformation($id);
    $user = $this->RentModel->getInformationUser($id1);
    if($update!=null){
        $data = [
            'updates' => $update,
            'user' => $user
          ];
        $this->view("Rents/RentVehicle",$data);
    }else{
        flash1('register_not',"this car is not disponible");
         redirect("Menus/showVehicle");
    }
            
        }elseif (isset($_SESSION['User']) && $_SESSION['User']  === true){
            $id=$_GET['id']; 
            $id1=$_SESSION['id'];
    $update = $this->RentModel->getInformation($id);
    $user = $this->RentModel->getInformationUser($id1);
            if($update!=null){
                $data = [
                    'updates' => $update,
                    'user' => $user
                  ];
                $this->view("Rents/RentVehicle",$data);
            }else{
                flash1('register_not',"this car is not disponible");
                 redirect("Menus/showVehicle");
            }
        }else{
            redirect("users/login");
        }
       
   }
   public function CheckRent(){
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $véhicule_résérver = $_POST['véhicule_résérver'];
        $véhicule_résérver_model=$_POST['model'];
        $user_résérvé_par = $_POST['user_résérvé_par'];
        $Disponible1=$_POST['Disponible'];
        $date_réserve = $_POST['date_réserve'];
        $date_fin = $_POST['date_fin'];
        $number_of_véhicule = $_POST['number_of_véhicule'];
        $Price = $_POST['Price'];
        $date1=strtotime($date_réserve);
        $date2=strtotime($date_fin);
        $diff = abs($date2 - $date1); 
        $years = floor($diff / (365*60*60*24)); 
        $months = floor(($diff - $years * 365*60*60*24)
                               / (30*60*60*24)); 
        $days = floor(($diff - $years * 365*60*60*24 - 
             $months*30*60*60*24)/ (60*60*24));
        $price1=$number_of_véhicule*$Price*$days;   
        if($this->RentModel->CheckRent($number_of_véhicule,$date_fin,$date_réserve,$user_résérvé_par,$véhicule_résérver,$price1,$véhicule_résérver_model)===true){
            if($Disponible1>0){
            $Disponible=$Disponible1-$number_of_véhicule;
            if($this->RentModel->updateQuantity($Disponible,$id)===true){
            
             redirect('Rents/Recus');
            } else {
                flash1('register_not','something went wrong , try again');
                redirect('Menus/showVehicle');
              }
             
   }else {
    flash1('register_not','car not disponible');
    redirect('Menus/showVehicle');
   }
}
    }
}
public function Recus(){
    if((isset($_SESSION['User']) && $_SESSION['User']  === true)){
        $veh= $this->RentModel->getLastId();
        $data = [
          'veh' => $veh
        ];
        foreach($data['veh'] as $veh)
        $id=$veh->id;
        $veh1= $this->RentModel->getAl($id);
        $data1 = [
          'veh1' => $veh1
        ];

        $this->view("Rents/Recus",$data1);
    }
    
}
}


    
