<?php

include '../bd/conexion.php';

//variables que recibo
$region = $_REQUEST['region'];
$comuna = $_REQUEST['comuna'];
$establecimiento = $_REQUEST['establecimiento'];
$sector = $_REQUEST['sector'];
//consumo servicio
$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143'), true );

$resp = true;

//valido variables
if(empty($region)){$resp = false; }
if(empty($comuna)){$resp = false; }
if(empty($establecimiento)){$resp = false; }
if(empty($sector)){$resp= false; }
//valido el servicio
if(count($data) <= 4){$resp = false;}
 
 $respuesta = array("resp"=> $resp,"nombre" => $data['nickname']);

 echo json_encode($respuesta);



?>