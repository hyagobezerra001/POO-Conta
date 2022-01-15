<?php

namespace Alura\Banco\Modelo;

/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $rua
 * @property string $numero
 * @property string $bairro
 */
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nome)
    {
        return $this->$nome . PHP_EOL;
    }

  public function __set(string $name, $value): void
  {
      echo "Alterando '$name' de '$this->cidade' para '$value'\n";
      $this->$name = $value;
  }
}
