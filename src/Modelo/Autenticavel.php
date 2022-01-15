<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function autendicaSenha(string $senha): bool;
}