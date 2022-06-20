<?php

namespace PHPHeranca\Modelo\titular;

use PHPHeranca\Modelo\Conta\Conta;
use PHPHeranca\Modelo\Pessoa\Pessoa;
use PHPHeranca\Modelo\Endereco;


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
