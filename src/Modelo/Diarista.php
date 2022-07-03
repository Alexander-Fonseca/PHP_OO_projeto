<?php

namespace App\Modelo;

class Diarista
{
  public $nome;

  public function __construct($nome)
  {
    $this->nome = $nome;
  }
}