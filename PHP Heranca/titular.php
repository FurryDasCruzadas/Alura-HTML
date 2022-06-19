<?php

class Titular
{
  private string $cpf1;
  private string $nomeTitular;
  private $endereco;

  public function __construct($cpf,$nome,$endereco)
  {
    $this->cpf1 = $cpf;
    $this->nomeTitular = $nome;
  }
  public function VerEndereco(){
    return $this->endereco;
  }
}
