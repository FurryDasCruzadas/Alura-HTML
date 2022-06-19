<?php

namespace PHP\Conta;

class funcionario extends Pessoa
{
  private string $cargo;

  public function __construct($cpf1, $nome1, $cargo1)
  {
    parent::__construct($cpf1, $nome1);
    $this->cargo = $cargo1;
  }

  public function VerCargoFuc()
  {
    return $this->cargo;
  }
}
