<?php

class Conta
{
  public  $CpfTitular;
  public  $NomeTitular;
  public  $Saldo = 0;

  public function sacar(float $Valor)
  {
    if ($Valor > $this->Saldo) {
      echo "sem saldo" . PHP_EOL;
      return;
    }
    if ($Valor <= 0) {
      echo "sem saldo" . PHP_EOL;
      return;
    }
    $this->Saldo -= $Valor;
  }

  public function depositar(float $Valor)
  {
    if ($Valor <= 0) {
      echo "ERRRO" . PHP_EOL;
      return;
    }
    $this->Saldo += $Valor;
  }
  
  public function trasferir(float $Valor, Conta $contaDestino)
  {
    if ($Valor > $this->Saldo) {
      echo "sem saldo" . PHP_EOL;
      return;
    }
    $this->sacar($Valor);
    $contaDestino->depositar($Valor);
  }
}


$PrimeiraConta = new Conta();
$PrimeiraConta->CpfTitular = '032.640.600-00';
$PrimeiraConta->NomeTitular = 'joao';
$PrimeiraConta->Saldo = '0';


$SegundaConta = new Conta();
$SegundaConta->CpfTitular = '030.670.660-10';
$SegundaConta->NomeTitular = 'Maria';
$SegundaConta->Saldo = '0';

//$PrimeiraConta->sacar(1000);
$SegundaConta->depositar(2000);
$PrimeiraConta->depositar(2000);
$SegundaConta->trasferir(1000, $PrimeiraConta);

var_dump($SegundaConta);
var_dump($PrimeiraConta);
