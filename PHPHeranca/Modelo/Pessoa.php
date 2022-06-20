<?php

namespace PHPHeranca\Modelo\Pessoa;

use PHPHeranca\Modelo\Conta\Conta;

class Pessoa
{
  protected string $cpf;
  protected string $nome;

  private function __construct($cpf1, $nome1)
  {
    $this->validanometitular($nome1);
    $this->cpf = $cpf1;
    $this->nome = $nome1;
  }
  public function VerCp()
  {
    return $this->cpf;
  }
  public function VerNome()
  {
    return $this->nome;
  }

  public function validanometitular($nome)
  {
    if (strlen($nome) < 5) {
      echo "nome pequeno";
      exit();
    }
  }
  public function alteraNome(string $nome): void
  {
    $this->validanometitular($nome);
    $this->nome = $nome;
  }
}
