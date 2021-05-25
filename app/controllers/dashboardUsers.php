<?php 

class dashboardUsers extends Controller {
    public function __construct(){
        $this->dashboardUserModel = $this->model('dashboardUser');
        $this->vehicleModel = $this->model('vehicle');
        $this->RentModel = $this->model('Rent');
      }
    public function dashboardUser(){
        if (isset($_SESSION['User']) && $_SESSION['User']  === true ){
        $this->view("dashboardUsers/dashboardUser");
        }else{
        redirect("users/login");
    }
    }
    public function Reservation(){
        if (isset($_SESSION['User']) && $_SESSION['User']  === true ){
            $user=$_SESSION['name'];
            $Res = $this->dashboardUserModel->showResUser($user);
            $data = [
              'Res' => $Res
            ];
            $this->view("dashboardUsers/Reservation",$data);
            }else{
            redirect("users/login");
        }
    }
    public function update_Reservation(){
        if (isset($_SESSION['User']) && $_SESSION['User']  === true ){
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
            $this->view("dashboardUsers/update_Reservation",$data);
        }else{
                flash1('register_not',"you dont have a Reservation with id '$id'");
                redirect("dashboardUsers/Reservation"); 
            }
            }else{
            redirect("users/login");
        }
    }
    public function update_Reservation1(){
        if (isset($_SESSION['User']) && $_SESSION['User']  === true){
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
                        redirect('dashboardUsers/Reservation');
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
                    redirect('dashboardUsers/Reservation');
                
                } else {
                  flash1('register_not','something went wrong , try again');
                  redirect('dashboardUsers/Reservation');
                }
            }else{
                flash1('register_not','car not disponible');
                redirect('dashboardUsers/Reservation');
            }  
        }else{
            flash1('register_not','car not disponible');
            redirect('dashboardUsers/Reservation');
        }  
   }else {
    flash1('register_not','car not disponible');
    redirect('dashboardUsers/Reservation');
}
}else {
    flash1('register_not','car and model not match');
    redirect('dashboardUsers/Reservation');
}
}else { 
redirect('dashboardUsers/Reservation');
}
    }
}
    

    
    public function delete_Reservation(){
        if (isset($_SESSION['User']) && $_SESSION['User']  === true){
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
              flash('register_success',' vehicle deleted successfully');
              redirect('dashboardUsers/Reservation');
            } else {
              flash1('register_not','something went wrong , try again');
              redirect('dashboardUsers/Reservation');
            } 
        }}else{
          flash1('register_not','something went wrong , try again');
          
              redirect('dashboardUsers/Reservation');
        }
    }


}

