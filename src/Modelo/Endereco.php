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
final class Endereco
{
    use GetAtributos;
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




}
