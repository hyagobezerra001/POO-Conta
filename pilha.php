<?php

function funcao1()
{
    echo 'Entrei na Função 1' . PHP_EOL;
    try {
        funcao2();
    }catch (Throwable $problema){
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;

//        throw new RuntimeException(
//            'Exceção foi tratada, mandando a prox',
//            $problema->getCode(),
//            $problema
//        );
    }
    echo 'Saindo da Função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na Função 2' . PHP_EOL;

    //throw new ArithmeticError();
    throw new BadFunctionCallException();

    echo 'Saindo da Função 2' . PHP_EOL;
}

//Main
echo 'Iniciando o Programa Principal' . PHP_EOL;
funcao1();
echo 'Finalizando o Programa Principal' . PHP_EOL;