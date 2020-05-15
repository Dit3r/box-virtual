<?php

include '../bd/conexion.php';
//rescato el id

session_start();
$uname=$_SESSION['username'];
$id=$_SESSION['id'];

//variables que recibo
$host= $_REQUEST['host'];
$config= $_REQUEST['config'];

//consumo servicio
$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143'), true );

$resp = true;

//valido variables
if(empty($host)){$resp = false; }
if(empty($config)){$resp = false; }
//valido el servicio
if(count($data) <= 4){$resp = false;}
//concateno el url

 
 $respuesta = array("resp"=> $resp,"url" => $host.$id.$config );

 echo json_encode($respuesta);



?>