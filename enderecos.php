<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco("Guarulhos","Vila1", "Rua1", "100");
$umOutroEndereco = new Endereco("São Paulo","Vila2", "Rua2", "50");

//echo $umEndereco->cidade = "Paraiba" . PHP_EOL;
//echo $umEndereco->bairro;

echo $umEndereco . PHP_EOL;
//echo $umOutroEndereco . PHP_EOL;
