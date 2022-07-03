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
  static public function obterTodas()
  {
    return [
      new self(
        '01/07/2022',
        8,
        new Diarista('Maria'),
        new Cliente('João')
      ),
      new self(
        '02/07/2022',
        4,
        new Diarista('Fernanda'),
        new Cliente('Gabriela')
      ),
      new self(
        '03/07/2022',
        6,
        new Diarista('Daniela'),
        new Cliente('Marta')
      ),
    ];
  }
}