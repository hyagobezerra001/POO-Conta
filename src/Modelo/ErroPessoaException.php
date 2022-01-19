<?php

namespace Alura\Banco\Modelo;

class ErroPessoaException extends \DomainException
{
    public function __construct(string $nome)
    {
        $mensagem = "Nome $nome informado precisa ter mais que 5 letras";
        parent::__construct($mensagem);
    }
}