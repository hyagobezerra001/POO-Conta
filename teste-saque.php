<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

$conta = new ContaCorrente(new Titular(new Cpf('123-121-121-10'), "Hyago Bezerra", new Endereco("Guarulhos", "Vila Isabel", "Salinopolis", "100")),2);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();

