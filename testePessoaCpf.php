<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\ErroPessoaException;
use Alura\Banco\Modelo\Pessoa;

try {
    $pessoa = new Pessoa("Hyago Bezerra",new Cpf('452555.555-10'));
}catch (ErroPessoaException | UnexpectedValueException $exception){
    echo $exception->getMessage();
}



