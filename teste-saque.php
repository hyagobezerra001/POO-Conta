<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta,
    ContaCorrente,
    SaldoInsuficienteException,
    Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

$conta = new ContaCorrente(new Titular(new Cpf('433.551.565-10'), "Hyago Bezerra", new Endereco("Guarulhos", "Vila Isabel", "Salinopolis", "100")),2);

$conta->depositar(500);

try {
    $conta->sacar(600);
}catch (SaldoInsuficienteException $exception){
    echo $exception->getMessage();
}

echo $conta->getSaldo();



