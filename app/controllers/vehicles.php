<?php
class vehicles extends Controller {
    public function __construct(){
        $this->vehicleModel = $this->model('vehicle');
        $this->RentModel = $this->model('Rent');
        $this->dashboardUserModel = $this->model('dashboardUser');
      }
        public function vehicle(){
        if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
            
            $vehicle = $this->vehicleModel->show_vehicle();
            $data = [
              'vehicles' => $vehicle
            ];
      
            $this->view('vehicles/vehicle', $data);
        }else{
            redirect("users/login");
        }
       
        

}
  public function add_vehicle(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $model = $_POST['model'];
            $Price = $_POST['Price'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];
            $image1 = $_FILES['image']['tmp_name'];
            $Disponible = $_POST['Disponible'];
            $catégory = $_POST['catégory'];
            $upload= "C:\\xampp\htdocs\Vehicle_rental\public\upload/".$image;
          if(!empty($name) && !empty($model) && !empty($Price) && !empty($description)  && !empty($Disponible) && !empty($catégory) ){
              if(move_uploaded_file($image1, $upload)==true){
                if($this->vehicleModel->add_vehicle($name,$model,$Price,$image,$image1,$description,$Disponible,$catégory)===true){
                    flash('register_success','New vehicle added successfully');
                    redirect('vehicles/vehicle');
                  } else {
                    flash1('register_not','something went wrong , try again');
                    redirect('vehicles/vehicle');
                  } 
              }else{
                flash1('register_not','something went wrong , try again');
                
                    redirect('vehicles/vehicle');
              }
          }else {
            echo"all field are required";
            redirect('vehicles/vehicle');
          }
}
} 
public function update_vehicle(){
  if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
    $id=$_GET['id']; 
    $update = $this->vehicleModel->getInformation($id);
    if($update!=null){
      $data = [
      'updates' => $update
    ];

    $this->view('vehicles/update_vehicle',$data);
    }else{
      flash1('register_not',"you dont have a car with id '$id'");
      redirect("vehicles/vehicle");
    }
    
}else{
    redirect("users/login");
}
}

public function update_vehicle1(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_POST['id']; 
    $name = $_POST['name'];
    $model = $_POST['model'];
    $Price = $_POST['Price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image1 = $_FILES['image']['tmp_name'];
    $Disponible = $_POST['Disponible'];
    $catégory = $_POST['catégory'];
    $upload= "C:\\xampp\htdocs\Vehicle_rental\public\upload/".$image;
  if(!empty($name) && !empty($model) && !empty($Price) && !empty($description)  && !empty($Disponible) && !empty($catégory) ){
    if($image1 != ""){
      if(move_uploaded_file($image1, $upload)==true){
        $id=$_POST['id']; 
        if($this->vehicleModel->update_vehicle1($id,$name,$model,$Price,$image,$image1,$description,$Disponible,$catégory)===true){
            flash('register_success',' vehicle updated successfully');
            redirect('vehicles/vehicle');
          } else {
            flash1('register_not','something went wrong , try again');
            redirect('vehicles/vehicle');
          } 
      }else{
        flash1('register_not','something went wrong , try again');
        
            redirect('vehicles/vehicle');
      }
  }else {
    $id=$_POST['id']; 
    if($this->vehicleModel->update_vehicle2($id,$name,$model,$Price,$image,$image1,$description,$Disponible,$catégory)===true){
      
      flash('register_success',' vehicle updated successfully');
      redirect('vehicles/vehicle');
    } else {
      flash1('register_not','something went wrong , try again');
      redirect('vehicles/vehicle');
    } 
    }
    }
   else{
    echo"all field are required";
    redirect('vehicles/vehicle');
  }
}
}
public function delete_vehicle(){
  if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
    $id=$_GET['id']; 
    if($this->vehicleModel->delete_vehicle($id)===true){
      flash('register_success',' vehicle deleted successfully');
      redirect('vehicles/vehicle');
    } else {
      flash1('register_not','something went wrong , try again');
      redirect('vehicles/vehicle');
    } 
}else{
  flash1('register_not','something went wrong , try again');
  
      redirect('vehicles/vehicle');
}
  }
  public function users() {
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
      $users = $this->vehicleModel->show_users();
            $data = [
              'users' => $users
            ];
      $this->view('vehicles/users',$data);
    }else{
      redirect("users/login");
  }
  }
  public function update_user(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
      $id=$_GET['id']; 
    $user1 = $this->vehicleModel->getInformationUser($id);
    $users = $this->vehicleModel->show_users();
    if($user1!=null){
      $data = [
      'user1' => $user1,
      'users' => $users
    ];

    $this->view('vehicles/update_user',$data);
    }else{
      flash1('register_not',"you dont have a user with id '$id'");
      redirect("vehicles/users");
    }
    }else{
      redirect("users/login");
  }
  }
  public function update_user1(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email=$_POST['email']; 
      $Role = $_POST['is_An_admin'];
      if($this->vehicleModel->update_user1($email,$Role)===true){
            flash('register_success',' user updated successfully');
        redirect('vehicles/users');
      } else {
        flash1('register_not','something went wrong , try again');
        redirect('vehicles/users');
      } 
        
  }
  }
  public function delete_user(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
      $id=$_GET['id']; 
      if($this->vehicleModel->delete_user($id)===true){
        flash('register_success',' user deleted successfully');
        redirect('vehicles/users');
      } else {
        flash1('register_not','something went wrong , try again');
        redirect('vehicles/users');
      } 
  }else{
    flash1('register_not','something went wrong , try again');
    
        redirect('vehicles/users');
  }
    }
    public function ReservationAdmin(){
      if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
        $Res = $this->vehicleModel->show_Res();
              $data = [
                'Res' => $Res
              ];
        $this->view('vehicles/ReservationAdmin',$data);
      }else{
        redirect("users/login");
    }
    }
    public function end_res(){
      if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
        $id = $_GET['id'];
        $veh= $this->vehicleModel->getVeh($id);
        $data = [
          'veh' => $veh
        ];
        foreach($data['veh'] as $veh)
        $carName=$veh->véhicule_résérver;
        $carModel=$veh->véhicule_résérver_model;
        $carNumber=$veh->number_of_véhicule;
        $carDispo=$this->vehicleModel->checkVeh($carName,$carModel);
        $data1 = [
          'carDispo'=> $carDispo
        ];
        foreach($data1['carDispo'] as $carDispo)
        $dispo=$carDispo->Disponible;
        $car=$carDispo->id;
        $Dis= ( (int)$dispo + (int)$carNumber );
        if($this->RentModel->updateQuantity($Dis,$car)===true){
        if($this->vehicleModel->end_res($id)===true){
            flash('register_success',' reservation ended successfully');
            redirect('vehicles/ReservationAdmin');
          }
          else{
            flash1('register_not','something went wrong , try again');
            redirect('vehicles/ReservationAdmin');
          }
        }else{
          flash1('register_not','something went wrong , try again');
          redirect('vehicles/ReservationAdmin');
        }

      }

    }

   public function Our_Statistics(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
      $Res = $this->vehicleModel->show_vehicle();
      $Res1 = $this->vehicleModel->show_Res();
            $data = [
              'Res' => $Res,
              'Res1' => $Res1
            ];
      $this->view('vehicles/Our_Statistics',$data);
    }else{
      redirect("users/login");
  }
   }
   public function Reservation(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
      $user=$_SESSION['name'];
      $Res = $this->dashboardUserModel->showResUser($user);
      $data = [
              'Res' => $Res
      ];
      $this->view("vehicles/Reservation",$data);
    }else{
      redirect("users/login");
  }
   }
   public function update_Reservation(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
        $user=$_SESSION['name'];
        $id=$_GET['id']; 
        $vehicle = $this->vehicleModel->show_vehicle();
        $update = $this->dashboardUserModel->getInformationRes($id,$user);
        $update2 = $this->dashboardUserModel->getInformationRes($id,$user);
        $data1 = [
            'update2' => $update2,
        ];
        foreach($data1['update2'] as $update2)
        $carName =$update2->véhicule_résérver;
        $carModel =$update2->véhicule_résérver_model;
        $update1 = $this->dashboardUserModel->getInformationRes1($carName,$carModel);
        if($update!=null){
        $data = [
          'update' => $update,
          'vehicles' => $vehicle,
          'update1' => $update1,
        ];
        $this->view("vehicles/update_Reservation",$data);
    }else{
            flash1('register_not',"you dont have a Reservation with id '$id'");
            redirect("vehicles/Reservation"); 
        }
        }else{
        redirect("users/login");
    }
}
public function update_Reservation1(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id=$_POST['id'];
    $véhicule_résérver1 = $_POST['véhicule_résérver'];
    $véhicule_résérver_model1=$_POST['model'];
    $user_résérvé_par = $_POST['user_résérvé_par'];
    
    $date_réserve = $_POST['date_réserve'];
    $date_fin = $_POST['date_fin'];
    $number_of_véhicule = $_POST['number_of_véhicule'];
    $check=$this->dashboardUserModel->checkChange1($id);
    $check2 = [
        'check' => $check,
    ];
    foreach($check2['check'] as $check)
    $Name1=$check->véhicule_résérver;
    $Model1=$check->véhicule_résérver_model;
    $number1=$check->number_of_véhicule;
    $date1=strtotime($date_réserve);
    $date2=strtotime($date_fin);
    $diff = abs($date2 - $date1); 
    $years = floor($diff / (365*60*60*24)); 
    $months = floor(($diff - $years * 365*60*60*24)
                           / (30*60*60*24)); 
    $days = floor(($diff - $years * 365*60*60*24 - 
    $months*30*60*60*24)/ (60*60*24));
    $carPrice=$this->dashboardUserModel->getPrice($véhicule_résérver1,$véhicule_résérver_model1); 
    $data2 = [
        'update3' => $carPrice,
    ];
    foreach($data2['update3'] as $carPrice)
    $id2=$carPrice->id;
    $Price1 =$carPrice->Price;
    $Disponible1 =$carPrice->Disponible;
    $Price = $number_of_véhicule*$Price1*$days;
    if($Name1==$véhicule_résérver1 && $Model1==$véhicule_résérver_model1 && $number1==$number_of_véhicule){
        if($this->dashboardUserModel->update_Reservation2($id,$date_réserve,$date_fin,$Price)){
                    flash('register_success','Résérvation updated success');
                    redirect('vehicles/Reservation');
        }
    
    
}elseif($this->dashboardUserModel->getPrice($véhicule_résérver1,$véhicule_résérver_model1)!=null){
    $user=$_SESSION['name'];
    $update3 = $this->dashboardUserModel->getInformationRes($id,$user);
    $data4 = [
            'update5' => $update3,
    ];
    foreach($data4['update5'] as $update3)   
    $qun=$update3->number_of_véhicule;
    $n=$update3->véhicule_résérver;
    $m=$update3->véhicule_résérver_model;
    $carPrice1=$this->dashboardUserModel->getPrice($n,$m); 
    $data3 = [
        'update4' => $carPrice1,
    ];
    foreach($data3['update4'] as $carPrice1)
    $Disponible2 =$carPrice1->Disponible;
    $car=$carPrice1->id;
    $Dis= ($qun + $Disponible2);
    $Disponible = ($Disponible1-$number_of_véhicule);
    
    if($this->dashboardUserModel->checkNameModel($véhicule_résérver1,$véhicule_résérver_model1)===true){
    if($this->RentModel->updateQuantity($Disponible,$id2)===true){
    if($this->RentModel->updateQuantity($Dis,$car)===true){
    if($this->dashboardUserModel->update_Reservation1($id,$véhicule_résérver1,$véhicule_résérver_model1,$user_résérvé_par,$date_réserve,$date_fin,$number_of_véhicule,$Price)===true){
        
                flash('register_success','Résérvation updated success');
                redirect('vehicles/Reservation');
            
            } else {
              flash1('register_not','something went wrong , try again');
              redirect('vehicles/Reservation');
            }
        }else{
            flash1('register_not','car not disponible');
            redirect('vehicles/Reservation');
        }  
    }else{
        flash1('register_not','car not disponible');
        redirect('vehicles/Reservation');
    }  
}else {
flash1('register_not','car not disponible');
redirect('vehicles/Reservation');
}
}else {
flash1('register_not','car and model not match');
redirect('vehicles/Reservation');
}
}else { 
redirect('vehicles/Reservation');
}
}
}



public function delete_Reservation(){
    if (isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin']  === true){
    $id=$_GET['id']; 
    $veh= $this->vehicleModel->getVeh($id);
    $data = [
      'veh' => $veh
    ];
    foreach($data['veh'] as $veh)
    $carName=$veh->véhicule_résérver;
    $carModel=$veh->véhicule_résérver_model;
    $carNumber=$veh->number_of_véhicule;
    $carDispo=$this->vehicleModel->checkVeh($carName,$carModel);
    $data1 = [
      'carDispo'=> $carDispo
    ];
    foreach($data1['carDispo'] as $carDispo)
    $dispo=$carDispo->Disponible;
    $car=$carDispo->id;
    $Dis= ( (int)$dispo + (int)$carNumber );
    if($this->RentModel->updateQuantity($Dis,$car)===true){
        if($this->dashboardUserModel->delete_Reservation($id)===true){
          flash('register_success','reservation deleted successfully');
          redirect('vehicles/Reservation');
        } else {
          flash1('register_not','something went wrong , try again');
          redirect('vehicles/Reservation');
        } 
    }}else{
      flash1('register_not','something went wrong , try again');
      
          redirect('vehicles/Reservation');
    }
}

    
}









  





?>