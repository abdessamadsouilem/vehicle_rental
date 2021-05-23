<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $this->view('pages/index');
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }

  }