<?php

include '../bd/conexion.php';
include '../config/properties.php';

//variables que recibo
$region = $_REQUEST['region'];
$comuna = $_REQUEST['comuna'];
$establecimiento = $_REQUEST['establecimiento'];
//consumo servicio
$data = json_decode( file_get_contents($hostValidaEstablecimiento), true );

$resp = true;

//valido variables
if(empty($region)){$resp = false; }
if(empty($comuna)){$resp = false; }
if(empty($establecimiento)){$resp = false; }
//valido el servicio
if(count($data) <= 4){$resp = false;}
 
 $respuesta = array("resp"=> $resp,"establecimiento" => $establecimiento );

 echo json_encode($respuesta);



?>