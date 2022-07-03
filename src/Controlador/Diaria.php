<?php

namespace App\controlador;

use App\Modelo\Diaria as ModeloDiaria;

//vai obter os dados através do modelo e chamar camada visualização
class Diaria
{
  public function listar()
  {
    $diarias = ModeloDiaria::obterTodas();

    require_once(__DIR__ . '/../../visualizacao/listar_diarias.php');
  }
}