<?php

class Conta
{
    //atributos
    private Cliente $cliente;
    private float $saldo;
    private static $numeroDeContas = 0;

    //metodo magico construct
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
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
        if ($valorASacar > $this->saldo) {
            echo "Limite insuficiente";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorDeposito)
    {
        if ($valorDeposito < 0) {
            echo "Valor Negativo: Operação Negada";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function trasferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Insuficiente";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

   

    //getters e setters

    public function getSaldo():float
    {
        return $this->saldo;
    }
    
    public function getNomeCliente():string
    {
        return $this->cliente->getNome();
    }

    public function getCpfCliente():string
    {
        return $this->cliente->getCpf();
    }
  
    public static function recuperaContas():int
    {
        return self::$numeroDeContas;
    }
}
