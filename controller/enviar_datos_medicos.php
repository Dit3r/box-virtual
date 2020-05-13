<?php

include '../bd/conexion.php';

//variables que recibo
$enfermedad = $_REQUEST['enfermedad'];
$alergico = $_REQUEST['alergico'];
$medicamento= $_REQUEST['medicamento'];
$motivo = $_REQUEST['motivo'];
//consumo servicio
$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143'), true );

$resp = true;

//valido variables
if(empty($enfermedad)){$resp = false; }
if(empty($alergico)){$resp = false; }
//if(empty($medicamento)){$resp = false; }
if(empty($motivo)){$resp= false; }
//valido el servicio
if(count($data) <= 4){$resp = false;}
 
 $respuesta = array("resp"=> $resp,"nombre" => $data['nickname']);

 echo json_encode($respuesta);



?>