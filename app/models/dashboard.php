<?php 

class dashboard {
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

}