<?php

interface InterfaceConta {

    public function saldoAtual();

    public function depositar($valor);

    public function sacar($valor);
}

?>