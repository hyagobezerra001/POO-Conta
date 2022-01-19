<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $numero = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            throw new \UnexpectedValueException('Cpf Incorreto');
        }
        $this->cpf = $cpf;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }
}
