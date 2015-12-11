<?php

require 'Repositorio.php';

$placa = $_POST['placa'];
$ruat= $_POST['ruat'];
$estado = $_POST['estado'];

var_dump($placa,$ruat,$estado);die();

$repo = new Repositorio();

$repo->connectBD();

$repo->guardarDatosMovilidad($placa, $ruat, $estado);

var_dump($repo->obtenerDatosMovilidad());