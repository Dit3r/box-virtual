<?php
//Bd nube
$hostBd= "34.68.81.120";
$portBd="5432";
$nameBd= "aps";
$userBd="pacienteaps";
$passwordBd= "pacienteaps2020";
$mensajeError="Lo sentimos pero no se pudo conectar a nuestra db";



//ur servicios local
$hostLlamada= "http://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=";
$configllamada="&width=700&heigth=500";

/////
$hostLlamada2="http://videoappqa.boxvirtual.cl/apsvideoapi/meetings?id=";
$configllamada2="&width=700&heigth=500";
//////

$hostObetenerusuario="http://localhost:8083/api/v1/usuarios/";

$hostCrearVideo="http://localhost:8083/api/v1/video";

$hostCreaDatosMedicos ="http://localhost:8083/api/v1/datosMedicos";


$hostValidaEstablecimiento = "https://api.mercadolibre.com/users/226384143";



$hostGetPrueba="https://api.mercadolibre.com/users/226384143";

$hostEnviaCoordenadas = "http://videoapsqa.boxvirtual.cl/apsvideoapi/meetings/location";


?>

