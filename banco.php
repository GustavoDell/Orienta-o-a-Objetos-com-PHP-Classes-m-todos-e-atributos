<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Gustavo');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCPFTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta('987.654.321-10', 'Giovanna');

var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;