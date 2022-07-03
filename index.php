<?php

declare(strict_types=1);

require_once('vendor/autoload.php');

use App\controlador\Diaria;
// criação da instancia
$diariaControlador = new Diaria;
$diariaControlador->listar();