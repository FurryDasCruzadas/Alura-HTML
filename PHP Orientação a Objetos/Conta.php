<?php

class Conta
{   
    public  $CpfTitular;
    public  $NomeTitular;
    public  $Saldo;

}

$PrimeiraConta = New Conta();
$PrimeiraConta-> CpfTitular = '032.640.600-00';
$PrimeiraConta-> NomeTitular = 'joao';
$PrimeiraConta-> Saldo = '4000';


$SegundaConta = New Conta();
$SegundaConta-> CpfTitular = '030.670.660-10';
$SegundaConta-> NomeTitular = 'Maria';
$SegundaConta-> Saldo = '12000';

//var_dump($PrimeiraConta);
//var_dump($SegundaConta);
echo $PrimeiraConta->Saldo;