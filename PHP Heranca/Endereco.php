<?php
class endereco
{
  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;

  public function __construct($cidade,$bairro1,$rua1,$numero1)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro1;
    $this->numero = $numero1;
    $this->rua = $rua1;
  }

  public function VerCidade(){
    return $this->cidade;
  }
  public function VerBairro(){
    return $this->bairro;
  }
  public function VerRua(){
    return $this->rua;
  }
  public function VerNumero(){
    return $this->numero;
  }

}
