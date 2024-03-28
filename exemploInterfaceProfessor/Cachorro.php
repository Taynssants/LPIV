<?php

    include_once "Animal.php";

    class Cachorro extends Animal {

        public function fazerSom() {
            echo "Late. <br>";
        }

        public function mover() {
            parent::mover();
        }
    }
?>