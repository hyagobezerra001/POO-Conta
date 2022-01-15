<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Hyago Bezerra',
    new Cpf('665.665.656-00'),
    1000
);

$umGerente = new Gerente(
    'Pedro Barbosa',
    new Cpf('852.565.525-10'),
    5000
);

$umTitular = new Titular(
    new Cpf("222.552.255-20"),
    "Marcia Pereira",
    new Endereco("Guarulhos", "Vila 2", "Rua 4", "100"),
);

$autenticador->tentaLogin($umGerente, '4321');

