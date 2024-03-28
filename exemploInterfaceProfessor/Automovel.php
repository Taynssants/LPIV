<?php

    include "Veiculo.php";

    abstract class Automovel implements Veiculo {

        private $marca;

        private $modelo;

        public function getMarca() {
            return $this->marca;
        }

        public  function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public  function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function acelerar($velocidade) {
            echo "O veículo acelerou até: " . $velocidade . " km/h. <br>";
        }

        public function frear($velocidade) {
            echo "O veículo freou até: " . $velocidade . " km/h. <br>";
        }

        public function parar() {
            echo "O veículo parou. <br>";
        }

        public function mudarDeMarcha($marcha) {
            echo "O veículo mudou para a marcha: " . $marcha . ". <br>";
        }
    }
?>