<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new Cpf('123.123.123-10'),
        'Hyago Bezerra',
        new Endereco('Guarulhos','Vila Isabel','Salinopolis','100')
    )
);

try {
    $contaCorrente->depositar(-100);
}catch (InvalidArgumentException $exception){
    echo "Valor a Depositar precisa ser Positivo";
}
