<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    //atributos
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    //metodo magico construct
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    //metodos
    public function sacar(float $valorASacar)
    {

        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorTarifa = $valorASacar + $tarifaSaque;
        if ($valorTarifa > $this->saldo) {
            throw new SaldoInsuficienteException($valorASacar, $this->saldo);
        }

        $this->saldo -= $valorTarifa;
    }

    public function depositar(float $valorDeposito)
    {
        if ($valorDeposito < 0) {
            throw new \InvalidArgumentException();
        }

        $this->saldo += $valorDeposito;
    }

    //getters e setters

    public function getSaldo():float
    {
        return $this->saldo;
    }
    
    public function getNomeTitular():string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular():string
    {
        return $this->titular->getCpf();
    }
  
    public static function recuperaContas():int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;

}
