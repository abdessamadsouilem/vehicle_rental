<?php

class Database {

public $host = 'localhost';
public $user = 'root';
public $pass = '';
public $dbname = 'vehicle_rental';
public $db;
public function __construct(){
  try {
    $this->db = new PDO('mysql:host=localhost;dbname=vehicle_rental', 'root', '');
    
  } catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to database!');
  }
}
public function getDb() {
  if ($this->db instanceof PDO) {
       return $this->db;
  }
}

}








  