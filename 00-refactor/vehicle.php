<?php
class Veicolo {
   private $type;
   private $marcia;
   public function __construct($type) {
       $this->type = $type;
       $this->marcia = "N";
   }
   
   protected function giraChiave() { /*...*/ }
   protected function azionaKickStarter() { /*...*/ }
   protected function azionaPedaleFreno() { /*...*/ }
   protected function azionaLevaFreno() { /*...*/ }
   protected function inserisciPrimaMarcia() {
       $this->marcia = 1;
   }
   protected function inserisciSecondaMarcia() {
       $this->marcia = 2;
   }
   public function accendi() {
       if ($this->type == "auto") {
           $this->giraChiave();
           $this->inserisciPrimaMarcia();
       }
       elseif ($this->type == "moto") {
           $this->azionaKickStarter();
       }
       else {
           $logger = new Logger(); //caricato con l'autoloader
           $logger->error("veicolo non riconosciuto");
           return false;
       }
   }
   public function frena() {
       if ($this->type == "auto") {
           $this->azionaPedaleFreno();
       }
       elseif ($this->type == "moto") {
           $this->azionaLevaFreno();
       }
       else {
           $logger = new Logger(); //caricato con l'autoloader
           $logger->error("veicolo non riconosciuto");
           return false;
       }
   }
}
