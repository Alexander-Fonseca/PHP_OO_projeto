<?php

namespace App\Modelo;

class Diaria
{
  private $data;

  private $tempo;

  private  Diarista $diarista;

  private  Cliente $cliente;

  public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
  {
    //fazendo isso pois a classe é private
    $this->tempo = $tempo;
    $this->data = $data;
    $this->diarista = $diarista;
    $this->cliente = $cliente;
  }
}