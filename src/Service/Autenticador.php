<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if(!$autenticavel->autendicaSenha($senha)){
           echo "OPS. Senha Incorreta." . PHP_EOL;
           return;
        }
        echo "OK. Usuário Logado Com Sucesso No Sistema" . PHP_EOL;
    }

}