<?php

require_once('vendor/autoload.php');

use App\controlador\Diarista;
use App\Modelo\Diarista as DiaristaModelo;

$d = new Diarista;
$d2 = new DiaristaModelo;

var_dump($d, $d2);