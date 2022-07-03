<?php

declare(strict_types=1);

namespace App\Modelo;

class Diaria
{
  public function __construct(
    public string $data, 
    public int $tempo, 
    public Diarista $diarista, 
    public Cliente $cliente){}
  /**
   * Retorna a lista das diárias
   *
   * @return void
   */
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