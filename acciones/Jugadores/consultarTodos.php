<?php

require_once '../../modelo/Jugador.php';
require_once '../../modelo/Club.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');

$resp = new consultarTodosResponse();

$Club1 = new Club();
$Club1->Nombre = 'Paris Saint-Germain Football Club';
$Club1->Fundacion = '2 de agosto de 1970 (52 anios)';
$Club1->Presidente = 'Nasser AL-Khelaifi';

$Juga1 = new Jugador();
$Juga1->Id = 1;
$Juga1->Nombre = 'Lionel Andres Messi';
$Juga1->Apodos = 'La Pulga, El Mesias, D10S';
$Juga1->Altura = '1.70 m';
$Juga1->Club = $Club1;

$Club2 = new Club();
$Club2->Nombre = 'Manchester United Football Club';
$Club2->Fundacion = '5 de marzo de 1878 (144 anios)';
$Club2->Presidente = 'Joel Glazer';

$Juga2 = new Jugador();
$Juga2->Id = 2;
$Juga2->Nombre = 'Lisandro Martinez';
$Juga2->Apodos = 'Licha';
$Juga2->Altura = '1.75 m';
$Juga2->Club = $Club2;


$resp->ListJugadores[] = $Juga1;
$resp->ListJugadores[] = $Juga2;

echo json_encode([$resp]);