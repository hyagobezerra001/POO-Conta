<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    use GetAtributos;
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            throw new ErroPessoaException($nomeTitular);
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
