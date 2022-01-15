<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorBonificacao;

$umFuncionario = new Desenvolvedor(
    'Hyago Bezerra',
    new Cpf('455.555.555.10'),
    1000);
$umFuncionario->sobeNivel();

$umaGerente = new Gerente(
    'Patricia',
    new Cpf('455.455.455.10'),
    3000);

$umDiretor = new Diretor(
    'Caio Mattos',
    new Cpf('455.415.425.22'),
    5000);

$umEditor = new EditorVideo(
    "Paulo",
    new Cpf("455.555.555-80"),
    1500
);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaGerente);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;