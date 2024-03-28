<?php

    include_once "Animal.php";

    class Passaro extends Animal {

        public function fazerSom() {
            echo "Canta. <br>";
        }
        
        public function mover() {
            echo "Voa e ";
            parent::mover();
        }
    }
?>