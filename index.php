<?php

require_once('vendor/autoload.php');

use App\controlador\Diarista;
use App\Modelo\Diarista as DiaristaModelo;
use App\Modelo\Cliente;
use App\Modelo\Diaria;

$d = new Diarista;
$diarista = new DiaristaModelo;
$diarista->nome = 'Maria';

$cliente = new Cliente;
$cliente->nomeCompleto = 'João Miguel';

$diaria = new Diaria('01/06/2022', 8, $diarista, $cliente);

var_dump($diaria);