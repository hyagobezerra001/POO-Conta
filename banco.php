<?php

require 'src/Conta.php';
require 'src/Cliente.php';
require 'src/Cpf.php';

$hyago = new Cliente(new Cpf('123.151.656.70'), 'Hyago Bezerra');
$conta001 = new Conta($hyago);
$conta001->depositar(11500);
$conta001->sacar(300);

$pedro = new Cliente(new Cpf('255-888-252-10'), 'Pedro Silva');
$conta002 = new Conta($pedro);
$conta002->depositar(1000);
$conta001->trasferir(1000, $conta002);

echo "Conta Hyago - Saldo: " . $conta001->getSaldo() . PHP_EOL;
echo "Conta Pedro - Saldo: " . $conta002->getSaldo() . PHP_EOL;
