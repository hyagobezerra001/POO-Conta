<?php

namespace Modelo;

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome Precisa ter mais que 5 caracteres";
            exit();
        }
    }

    public function getNome():string
    {
        return $this->nome;
    }

   
    public function getCpf():string
    {
        return $this->cpf->getCpf();
    }
}
