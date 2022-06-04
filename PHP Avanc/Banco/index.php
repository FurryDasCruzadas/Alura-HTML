<?php

include 'function.php';

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '123.456.689-11' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ],
  '123.256.789-12' => [
    'titular' => 'Vinicius',
    'saldo' => 100
  ],
  '123.258.852-13' => [
    'titular' => 'Claudia',
    'saldo' => 2000
  ],

];

//$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 1);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 50);
//unset($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
  echo "$cpf {$conta['titular']}".PHP_EOL;
}