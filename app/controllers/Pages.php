<?php
  class Pages extends Controller {
    public function __construct(){
      $this->vehicleModel = $this->model('vehicle');
    }
    
    public function index(){
      $showAll=$this->vehicleModel->show_vehicle_All();
      $data = [
        'showAll' => $showAll
      ];
      $this->view('pages/index',$data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }

  }