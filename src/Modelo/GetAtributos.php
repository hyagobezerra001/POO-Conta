<?php

namespace Alura\Banco\Modelo;

trait GetAtributos
{
    public function __get(string $nome)
    {
        return $this->$nome . PHP_EOL;
    }

    public function __set(string $name, $value): void
    {
        echo "Alterando '$name' de '{$this->$name}' para '$value'\n";
        $this->$name = $value;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}