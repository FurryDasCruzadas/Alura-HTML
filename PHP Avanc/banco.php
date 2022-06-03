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

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['saldo'] . PHP_EOL;
}
