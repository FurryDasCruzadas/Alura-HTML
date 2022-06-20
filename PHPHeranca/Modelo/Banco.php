<?php

namespace PHPHeranca\Modelo\conta;

use PHPHeranca\Modelo\Conta\Conta;
use PHPHeranca\Modelo\Pessoa;
use PHPHeranca\Modelo\Endereco;
use PHPHeranca\Modelo\func\funcionario;

require_once('PHPHeranca\Modelo\Conta\Conta.php');
require_once('PHPHeranca\Modelo\Pessoa.php');
require_once('PHPHeranca\Modelo\Conta\titular.php');
require_once('PHPHeranca\Modelo\Endereco.php');
require_once('PHPHeranca\Modelo\Func.php');

/*
$CasaDoJc = new endereco('lajeado','centro','43','104');
$JC = new Titular('032-640-600-00','Joao Camilo',$CasaDoJc);
$primeiraConta = new Conta($JC);

$CasaDoDavi = new endereco('lajeado','igrejinha','nao sei','32');
$DAVI = new Titular('752-728-280-10','Davi Gisch',$CasaDoDavi);
$SegundaConta = new Conta($DAVI);

var_dump($primeiraConta);
*/
$joao = new funcionario('123', 'joao', 'progrmador');
var_dump($joao);
//$primeiraConta->defineNomeTitular('joao');
//$primeiraConta->defineCpfTitular('032-640-600-00');
//$primeiraConta->depositar(1000);
//$segundaConta->VerNomeTitular();
//$primeiraConta->versaldo();
//$primeiraConta->verCpfTitular();
//$primeiraConta->VerNomeTitular();