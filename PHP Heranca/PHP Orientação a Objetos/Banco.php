<?php

require_once('Conta.php');
require_once('titular.php');

$vini = new Titular('032-640-600-00','joaocamilo');
$primeiraConta = new Conta($vini);

//var_dump($primeiraConta);


var_dump($primeiraConta);

//$primeiraConta->defineNomeTitular('joao');
//$primeiraConta->defineCpfTitular('032-640-600-00');
//$primeiraConta->depositar(1000);
//$segundaConta->VerNomeTitular();
//$primeiraConta->versaldo();
//$primeiraConta->verCpfTitular();
//$primeiraConta->VerNomeTitular();
