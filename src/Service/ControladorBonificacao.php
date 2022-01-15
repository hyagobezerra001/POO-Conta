<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private float $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal():float
    {
        return $this->totalBonificacao;
    }

}