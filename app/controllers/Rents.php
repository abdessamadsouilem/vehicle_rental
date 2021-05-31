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
        $véhicule_catégory = $_POST['véhicule_catégory'];
        $véhicule_résérver_model=$_POST['model'];
        $user_résérvé_par = $_POST['user_résérvé_par'];
        $Disponible1=$_POST['Disponible'];
        $date_get_reservation=date("Y/m/d");
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
        if($Disponible1>1){
        if($this->RentModel->CheckRent($number_of_véhicule,$date_fin,$date_réserve,$user_résérvé_par,$véhicule_résérver,$price1,$véhicule_résérver_model,$véhicule_catégory,$date_get_reservation)===true){
            $Disponible=$Disponible1-$number_of_véhicule;
            if($this->RentModel->updateQuantity($Disponible,$id)===true){
            
             redirect('Rents/Recus');
            } else {
                flash1('register_not','something went wrong , try again');
                redirect('Menus/showVehicle');
              }
            }
             }else {
    flash1('register_not','car not disponible');
    redirect('Menus/showVehicle');
   }
}
    }

public function Recus(){
    if((isset($_SESSION['User'])) && $_SESSION['User']  === true || isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin'] ===true ){
        $user=$_SESSION['name'];
        $veh= $this->RentModel->getLastId($user);
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
public function Details(){
    $id=$_GET['id']; 
    
$update = $this->RentModel->getInformation($id);

if($update!=null){

$commentNum=$this->RentModel->getNumComments($id);
$personName=$this->RentModel->getPersonName($id);
$data = [
    'updates' => $update,
    
    'commentNum' => $commentNum,
    'personName' => $personName
  ];

$this->view("Rents/Details",$data);
    
}else{
    redirect("Menus/showVehicle");
}
}
public function like($vé){
    if((isset($_SESSION['User'])) && $_SESSION['User']  === true || isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin'] ===true ){
        $id = $_SESSION['id'];
        $likes= $this->RentModel->getAll($vé);
        $data = [
          'likes' => $likes
        ];
        foreach($data['likes'] as $likes)
        $like=$likes->likes;
        if($this->RentModel->selectLike($id,$vé)===true){
            if($this->RentModel->newLike($id,$vé)===true){
            if($this->RentModel->Like($vé,$like)===true){
                redirect("Rents/Details?id=$vé");
            }
            
        }
        }else{
            redirect("Rents/Details?id=$vé");
        }
        
        
    }
    else{
        flash1('register_not',"you cannot like véhicle or commented if you don't have account ");
        redirect("Rents/Details?id=$vé");
    }
}

public function comment($vé){
    if((isset($_SESSION['User'])) && $_SESSION['User']  === true || isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin'] ===true ){
    $id = $_SESSION['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $comment=$_POST['comments'];
     $date=date("Y-m-d");
     if($this->RentModel->newComment($id,$vé,$comment,$date)===true){
        redirect("Rents/Details?id=$vé");
     }
    
    }
    }
    else{
        flash1('register_not',"you cannot like véhicle or commented if you don't have account ");
        redirect("Rents/Details?id=$vé");
    }
}


}


    
