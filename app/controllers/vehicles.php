<?php
class vehicles extends Controller {
    public function __construct(){
        $this->vehicleModel = $this->model('vehicle');
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
                    flash1('register_not','something went wrong , try again"""');
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
}







  





?>