<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$gustavo = new Titular(new Cpf('123.456.789-10'), 'Gustavo');
$primeiraConta = new Conta($gustavo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCPFTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$bruna = new Titular(new Cpf('987.654.321-10'), 'Bruna');
$segundaConta = new Conta($bruna);

var_dump($segundaConta);

$outra = new Titular(new Cpf('987'), 'Outra Conta');

echo Conta::recuperaNumeroDeContas() . PHP_EOL;