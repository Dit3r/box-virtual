<?php

include '../bd/conexion.php';

//variables que recibo
$url = $_REQUEST['url'];
//consumo servicio
$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143'), true );

$resp = true;

//valido variables
if(empty($url)){$resp = false; }

//valido el servicio
if(count($data) <= 4){$resp = false;}
 
 $respuesta = array("resp"=> $resp,"url" => $url );

 echo json_encode($respuesta);



?>