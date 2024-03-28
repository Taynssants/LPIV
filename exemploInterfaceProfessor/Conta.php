<?php

    class Conta {

        private $numeroConta;

        private $saldo;

        public function getNumeroConta() {
            return $this->numeroConta;
        }

        public function setNumeroConta($numeroConta) {
            $this->numeroConta = $numeroConta;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function __construct($numeroConta, $saldo) {
            $this->setNumeroConta($numeroConta);
            $this->setSaldo($saldo);
        }
    }
?>