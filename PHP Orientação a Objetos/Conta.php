<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static $numeroDeConta = 0;
    private static $codigoDoBanco = 12;

    public function __construct(string $cpf, string $nome)
    {
        $this->validanome($nome);
        $this->cpfTitular = $cpf;
        $this->nomeTitular = $nome;
        $this->saldo = 0.000000000001;

        Conta::$numeroDeConta++;
    }


    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        if ($valor < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $contaDestino)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

    public function versaldo()
    {
        echo "{$this->saldo}\n";
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function verCpfTitular()
    {
        echo "{$this->cpfTitular}\n";
    }

    public function defineNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }

    public function VerNomeTitular()
    {
        echo "{$this->nomeTitular}\n";
    }

    private function validanome($nome)
    {

        if (strlen($nome) < 5) {
            echo 'erro menor';
            exit();
        }
    }
   
}