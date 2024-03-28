<?php

include_once "AreaCalculavel.php";
class Quadrado implements AreaCalculavel{

    private $lado;
     

     public function getLado(){
        return $this->lado;
     }
     public function setLado($lado) {
        $this->lado = $lado;
    }
    }

?>