<?php

    include_once "Animal.php";

    class Gato extends Animal {

        public function fazerSom() {
            echo "Mia. <br>";
        }
        
        public function mover() {
            parent::mover();
        }
    }
?>