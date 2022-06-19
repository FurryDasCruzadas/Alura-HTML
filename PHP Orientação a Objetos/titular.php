<?php

class Titular
{
  private string $cpf1;
  private string $nomeTitular;

  public function __construct($cpf,$nome)
  {
    $this->cpf1 = $cpf;
    $this->nomeTitular = $nome;
  }
}
