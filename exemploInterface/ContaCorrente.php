<?php

include_once "Conta.php";
include_once "InterfaceConta.php";

class ContaCorrente extends Conta implements InterfaceConta{

    public function saldoAtual(){
        echo parent::getSaldo();
    }

    public function depositar($valor){
    $saldoAtual = parent::getSaldo();
}

public function sacar($valor){
    $taxa = ($valor / 100) *2;
    $saldoAtual = parent::getSaldo();
    parent::setSaldo();
}
}

?>