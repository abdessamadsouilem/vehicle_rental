<?php
class vehicle extends Controller {
    public $pdo;
    public $name;
    public $model;
    public $Price;
    public $description;
    public $Disponible;
    public $catégory;
    public $temp;
    public $image_name;
    public function __construct(){
      $this->pdo = new Database;
      $this->pdo=$this->pdo->getDb();
    }
    public function add_vehicle($name,$model,$Price,$image,$image1,$description,$Disponible,$catégory){
    
    
    $upload= "public\upload/".$image;
   
    move_uploaded_file($image1, $upload);
    $query = "INSERT INTO `véhicule` (`name`, `model`, `Price`, `description`, `image`, `Disponible`, `catégory`) VALUES('$name', '$model', '$Price', '$description', '$image', '$Disponible', '$catégory')";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
  

    
 }
 public function show_vehicle(){
          $query = "SELECT * FROM `véhicule`";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);
          return $result;  
}
public function getInformation($id){
    $id;
    $query = "SELECT * FROM `véhicule` where `id`='$id'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);
          return $result;
}
public function update_vehicle(){
    
}
public function update_vehicle1($id,$name,$model,$Price,$image,$image1,$description,$Disponible,$catégory){
    $id;
    $upload= "public\upload/".$image;
    move_uploaded_file($image1, $upload);
    $query = "UPDATE `véhicule` SET `name` = '$name', `model` = '$model', `Price` = '$Price', `description` = '$description', `image` = '$image', `Disponible` = '$Disponible' , `catégory` = '$catégory' where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function update_vehicle2($id,$name,$model,$Price,$image,$image1,$description,$Disponible,$catégory){
    $id;
    $query = "UPDATE `véhicule` SET `name` = '$name', `model` = '$model', `Price` = '$Price', `description` = '$description',  `Disponible` = '$Disponible', `catégory` = '$catégory' where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

public function delete_vehicle($id){
    $id;
    $query = "delete from `véhicule`  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function show_users(){
    $query = "SELECT * FROM `person`";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;  
}
public function getInformationUser($id){
    $id;
    $query = "SELECT * FROM `person` where `id`='$id'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);
          return $result;
}
public function update_user1($email,$Role){
    $query = "UPDATE `person` SET `is_An_admin`='$Role' where `email` = '$email'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function delete_user($id){
    $query = "delete from `person`  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function show_Res(){
    $query = "SELECT * FROM `résérvation`";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;  
}
public function checkVeh($carName,$carModel){
    $query = "SELECT * FROM `véhicule` where `name` = '$carName' and `model`='$carModel'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}
public function end_res($id){
    $query = "delete from `résérvation`  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function getVeh($id){
    $query = "SELECT * FROM `résérvation` where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}
public function delete_res($id){
    $query = "delete from `résérvation`  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

}


?>