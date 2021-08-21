<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCPFTitular('123.456.789.10');

echo $primeiraConta->recuperaCPFTitular();
echo $primeiraConta->recuperaSaldo();