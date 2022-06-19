<?php

namespace PHP\Conta;

class Titular extends Pessoa
{
  private $endereco;

  public function __construct($cpf, $nome, $endereco)
  {
    parent::__construct($cpf, $nome);
    $this->endereco = $endereco;
  }


  public function VerEndereco()
  {
    return $this->endereco;
  }
}
