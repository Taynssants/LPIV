<?php

include_once "AreaCalculavel.php";

class Retangulo extends AreaCalculavel{
  
    private $base;
    private $altura;
     

     public function getAltura(){
        return $this->altura;
     }
     public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getBase(){
        return $this->base;
     }
     public function setBase($base) {
        $this->base = $base;
    }
}

?>