<?php

$conta1 = [
  "Titular" => "João",
  "Saldo" => 12000,
];

$conta2 = [
  "Titular" => "Davi",
  "Saldo" => 9000,
];

$conta3 = [
  "Titular" => "Jose",
  "Saldo" => 100,
];


$contas = [$conta1, $conta2, $conta3];

for($i=0;$i<count($contas);$i++){
  echo $contas[$i] ['Titular'].PHP_EOL;
}