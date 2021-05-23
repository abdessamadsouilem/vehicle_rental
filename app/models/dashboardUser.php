<?php
class dashboardUser {
    public $pdo;
    public $name;
    public $model;
    public $Price;
    public $description;
    public $Disponible;
    public $catégory;
    public function __construct(){
      $this->pdo = new Database;
      $this->pdo=$this->pdo->getDb();
    }
    public function showResUser($user){
      $user;
      
      $query = "SELECT * FROM `résérvation` where `user_résérvé_par`='$user'";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $result;  
    }
    public function getInformationRes($id,$user){
      $id;
      $user;
      $query = "SELECT * FROM `résérvation` where `id`='$id' and `user_résérvé_par`='$user'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
  }
  public function update_Reservation1($id,$véhicule_résérver,$véhicule_résérver_model,$user_résérvé_par,$date_réserve,$date_fin,$number_of_véhicule,$Price){
    $id;
    $véhicule_résérver;
    $véhicule_résérver_model;
    $user_résérvé_par;
    $date_réserve;
    $date_fin;
    $number_of_véhicule;
    $Price;
    $query = "UPDATE `résérvation` SET `véhicule_résérver` = '$véhicule_résérver', `véhicule_résérver_model` = '$véhicule_résérver_model', `number_of_véhicule` = '$number_of_véhicule', `date_réserve` = '$date_réserve', `date_fin` = '$date_fin', `Price` = '$Price'  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
  }
  public function getPrice($véhicule_résérver1,$véhicule_résérver_model1){
    $query = "SELECT * FROM `véhicule` where `name`='$véhicule_résérver1' and `model`='$véhicule_résérver_model1'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function getInformationRes1($carName,$carModel){
    $id;
    $user;
    $query = "SELECT * FROM `véhicule` where `name`='$carName' and `model`='$carModel'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);
          return $result;
}
public function checkNameModel($carName,$carModel){
  $query = "SELECT * FROM `véhicule` where `name`='$carName' and `model`='$carModel'";
  $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function delete_Reservation($id){
  $id;
  $query = "delete from `résérvation`  where `id` = '$id'";
  $stmt = $this->pdo->prepare($query);
  if($stmt->execute()){
      return true;
  }else{
      return false;
  }
}
public function checkChange($id,$véhicule_résérver,$véhicule_résérver_model,$user_résérvé_par,$date_réserve,$date_fin,$number_of_véhicule){
  $query = "SELECT * FROM `résérvation` where `id` = '$id' and `véhicule_résérver` = '$véhicule_résérver' and `véhicule_résérver_model` = '$véhicule_résérver_model' and `number_of_véhicule` = '$number_of_véhicule' and `date_réserve` = '$date_réserve' and `date_fin` = '$date_fin' ";
  $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function checkChange1($id,$véhicule_résérver,$véhicule_résérver_model,$user_résérvé_par,$number_of_véhicule){
  $query = "SELECT * FROM `résérvation` where `id` = '$id' and `véhicule_résérver` = '$véhicule_résérver' and `véhicule_résérver_model` = '$véhicule_résérver_model' and `number_of_véhicule` = '$number_of_véhicule' ";
  $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}
public function update_Reservation2($id,$date_réserve,$date_fin,$Price){
  $id;
  $véhicule_résérver;
  $véhicule_résérver_model;
  $user_résérvé_par;
  $date_réserve;
  $date_fin;
  $number_of_véhicule;
  $Price;
  $query = "UPDATE `résérvation` SET  `date_réserve` = '$date_réserve', `date_fin` = '$date_fin', `Price` = '$Price'  where `id` = '$id'";
  $stmt = $this->pdo->prepare($query);
  if($stmt->execute()){
      return true;
  }else{
      return false;
  }
}
    
}