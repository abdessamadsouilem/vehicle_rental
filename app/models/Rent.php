<?php 

class Rent {
    public $pdo;
    public $number_of_véhicule;
    public $date_fin;
    public $date_réserve;
    public $user_résérvé_par;
    public $véhicule_résérver;
    public $price1;
    public function __construct(){
      $this->pdo = new Database;
      $this->pdo=$this->pdo->getDb();
    }
    public function réservation_vehicle(){

    }
    public function getInformation($id){
      $id;
      $query = "SELECT * FROM `véhicule` where `id`='$id'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
  }
  public function getInformationUser($id1){
    $id1;
    $query = "SELECT * FROM `person` where `id`='$id1'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);
          return $result;
}
public function CheckRent($number_of_véhicule,$date_fin,$date_réserve,$user_résérvé_par,$véhicule_résérver,$price1,$véhicule_résérver_model){
  $query = "INSERT INTO `résérvation` (`véhicule_résérver`, `user_résérvé_par`, `date_réserve`, `date_fin`, `Price`, `number_of_véhicule`,`véhicule_résérver_model`) VALUES('$véhicule_résérver', '$user_résérvé_par', '$date_réserve', '$date_fin', '$price1', '$number_of_véhicule','$véhicule_résérver_model')";
  $stmt = $this->pdo->prepare($query);
  if($stmt->execute()){
      return true;
  }else{
      return false;
  }
}

public function updateQuantity($Disponible,$id){
  if($Disponible>=1){
    $query = "UPDATE `véhicule` SET  `Disponible` = '$Disponible'  where `id` = '$id'";
    $stmt = $this->pdo->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
  }else{
    return false;
  }
  
}
public function getLastId($user){
  $query = "SELECT `id` FROM `résérvation` where `user_résérvé_par` ='$user' ORDER BY id DESC LIMIT 1  ";
  $stmt = $this->pdo->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
} 
public function getAl($id){
  $query = "SELECT * FROM `résérvation` where `id` = '$id'";
  $stmt = $this->pdo->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
}