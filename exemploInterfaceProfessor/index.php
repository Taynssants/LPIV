<?php

    include "Carro.php";
    include "Cachorro.php";
    include "Gato.php";
    include "Passaro.php";
    include "ContaCorrente.php";
    include "ContaPoupanca.php";

    $carro = new Carro();
    $carro->acelerar(100);
    $carro->frear(50);
    $carro->parar();
    $carro->mudarDeMarcha(2);
    $carro->fazerRevisao();

    $cachorro = new Cachorro();
    echo "Cachorro: <br>";
    $cachorro->fazerSom();
    $cachorro->mover();

    $gato = new Gato();
    echo "Gato: <br>";
    $gato->fazerSom();
    $gato->mover();

    $passaro = new Passaro();
    echo "Passaro: <br>";
    $passaro->fazerSom();
    $passaro->mover();

    $contaCorrente = new ContaCorrente(1234, 1000);
    echo "Conta Corrente: <br>";
    echo $contaCorrente->saldoAtual() . "<br>";
    $contaCorrente->depositar(1000);
    echo $contaCorrente->saldoAtual() . "<br>";
    $contaCorrente->sacar(1000);
    echo $contaCorrente->saldoAtual() . "<br>";

    $contaPoupanca = new ContaPoupanca(4321, 10000);
    echo "Conta Poupanca: <br>";
    echo $contaPoupanca->saldoAtual() . "<br>";
    $contaPoupanca->depositar(5000);
    echo $contaPoupanca->saldoAtual() . "<br>";
    $contaPoupanca->sacar(5000);
    echo $contaPoupanca->saldoAtual() . "<br>";
?>