<?php
class Car {
  private $status = 'off';
  public function start($parkBrakeEnabled) {
    $log = new Logger(); // loaded with autoloader
    try {
      if (!$parkBrakeEnabled) {
       throw new Exception("can't start! Please enable park brake before starting"); 
      }
      $this->status = 'on';
      $log->info("brum brum");
    }
    catch(\Exception $e) {
      $log->error($e->getMessage());
      $this->status = 'off';
    }
  }
  
  public function getStatus(){
    return $this->status;
  }
  
  
  public function testStart() {
    $car = new Car();
    
    $car->start(true);
    assertEqual($this->getStatus(), "on");
    
    $car->start(false);
    assertEqual($this->getStatus(), "off");
    
  }
  
}
