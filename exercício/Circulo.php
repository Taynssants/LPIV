<?php
include_once "AreaCalculavel.php";
class Circulo implements AreaCalculavel{

    private $raio;
     

     public function getRaio(){
        return $this->raio;
     }
     public function setRaio($raio) {
        $this->raio = $raio;
    }
    }
?>