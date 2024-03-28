<?php

    include_once "Conta.php";
    include_once "InterfaceConta.php";

    class ContaPoupanca extends Conta implements InterfaceConta {
        
        public function saldoAtual() {
            echo parent::getSaldo();
        }

        public function depositar($valor) {
            $saldoAtual = parent::getSaldo();
            parent::setSaldo($saldoAtual + $valor);
        }

        public function sacar($valor) {
            $taxa = ($valor / 100) * 5;
            $saldoAtual = parent::getSaldo();
            parent::setSaldo($saldoAtual - $valor - $taxa);
        }

        public function __construct($numeroConta, $saldo) {
            parent::setNumeroConta($numeroConta);
            parent::setSaldo($saldo);
        }
    }
?>