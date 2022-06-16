<?php

require_once('Conta.php');

$primeiraConta = new Conta('032-640-600-00','joaocamilo');
//var_dump($primeiraConta);
$segundaConta = new Conta('032-640-600-12','davigisch');


var_dump($primeiraConta);

//$primeiraConta->defineNomeTitular('joao');
//$primeiraConta->defineCpfTitular('032-640-600-00');
//$primeiraConta->depositar(1000);
//$segundaConta->VerNomeTitular();
//$primeiraConta->versaldo();
//$primeiraConta->verCpfTitular();
//$primeiraConta->VerNomeTitular();
