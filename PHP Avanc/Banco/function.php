<?php

function sacar( array $conta, float $valor)
{
  if ($valor > $conta['saldo']) {
    echo "não pode sacar" . PHP_EOL;
  } else {
    $conta['saldo'] -= $valor;
  }
  return $conta;
}

function depositar( array $conta, float $valor)
{

  if ($valor < 0) {
    //nada
  } else {
    $conta['saldo'] += $valor;
  }
  return $conta;
}