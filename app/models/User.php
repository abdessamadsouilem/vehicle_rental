<?php 

class User {
    public $name;
    public $email;
    public $password;
    public $télé;
    public $city;
    public $pdo;

    public function __construct(){
      $this->pdo = new Database;
      $this->pdo=$this->pdo->getDb();
    }
    
   
    
    public function register($data) {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $télé = $data['télé'];
        $city = $data['city'];
        $date_de_register =$data['date_de_register'];

        $query = "INSERT INTO `person` (`name`, `email`, `password`,`date_de_register`, `télé`, `city`) VALUES('$name', '$email', '$password','$date_de_register', '$télé', '$city')";
        
        $stmt = $this->pdo->prepare($query);
        if($stmt->execute()){
          return true;
      }else{
          return false;
      }
      }

      public function login($email,$password) {
        
        try {
          
          $query = $this->pdo->prepare("SELECT * FROM `person` WHERE  `email`='$email' AND `password`='$password' AND `is_An_admin` = '1'");
          $query->execute();
          if ($query->rowCount() > 0) {
              $result = $query->fetch(PDO::FETCH_OBJ);
              return $result;  
          } else {
              return false;
          }
      } catch (PDOException $e) {
          exit($e->getMessage());
      }
        
        
    }
    public function login1($email,$password) {
        
        try {
          
          $query = $this->pdo->prepare("SELECT * FROM `person` WHERE  `email`='$email' AND `password`='$password' AND `is_An_admin` = '0'");
          $query->execute();
          if ($query->rowCount() > 0) {
              $result = $query->fetch(PDO::FETCH_OBJ);
              return $result;  
          } else {
              return false;
          }
      } catch (PDOException $e) {
          exit($e->getMessage());
      }
        
        
    }
   
    }


    


     
?>