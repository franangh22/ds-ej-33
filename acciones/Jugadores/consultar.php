<?php

require_once '../../modelo/Satelite.php';
require_once '../../modelo/Operador.php';
require_once 'responses/consultarResponse.php';

header('Content-Type: application/json');

$resp = new consultarResponse();
$IdSatelite = $_GET['id'];


$Ope = new Operador();
$Ope->Nombre = 'ARSAT';
$Ope->TipoEmpresa = 'Publica';
$Ope->FormaLegal = 'Sociedad anónima';

$Sat = new Satelite();
$Sat->Id = $IdSatelite;
$Sat->Nombre = 'Arsat-1';
$Sat->TipoMision = 'Comunicaciones';
$Sat->DuracionEnAnios = 15;
$Sat->Operador = $Ope;

$resp->Satelite = $Sat;

echo json_encode([$resp]);