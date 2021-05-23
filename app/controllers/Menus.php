<?php

class Menus extends Controller {
    public function __construct(){
        $this->MenuModel = $this->model('Menu');
        $this->vehicleModel = $this->model('vehicle');
      }

    public function showVehicle(){
        $vehicle = $this->vehicleModel->show_vehicle();
        $data = [
          'vehicles' => $vehicle
        ];
         
         $this->view("Menus/showVehicle",$data);
         
        
    }


}
