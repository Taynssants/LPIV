<?php

    interface Veiculo {

        public function acelerar($velocidade);

        public function frear($velocidade);

        public function parar();

        public function mudarDeMarcha($marcha);
    }
?>