<?php

$conta1 = [
  "Titular" => "João",
  "Saldo" => 12000,
  "cpf" => "004020",
];

$conta2 = [
  "Titular" => "Davi",
  "Saldo" => 9000,,
  "cpf" => "010020",
];

$conta3 = [
  "Titular" => "Jose",
  "Saldo" => 100,
  "cpf" => "100020",
];


$contas = [$conta1, $conta2, $conta3];

foreach ($contas as $conta){
  echo $conta['Titular'].PHP_EOL;


}