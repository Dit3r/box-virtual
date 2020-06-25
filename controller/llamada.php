<?php

include '../bd/conexion.php';
include '../config/properties.php';
//rescato el id

session_start();
$uname=$_SESSION['username'];
$id=$_SESSION['id'];

//variables que recibo
//$host= $_REQUEST['host'];
//$config= $_REQUEST['config'];


//$data = json_decode( file_get_contents($hostObetenerusuario.$id), true );

$json = json_decode( file_get_contents($hostLlamada2.$id.$configllamada2), true );
$status=  $json['status'];
$message = $json['message'];
$data = $json['data'];

//$data= json_decode( file_get_contents($hostLlamada.$id.$configllamada), true );


//$resp = true;

//valido variables
//if(empty($host)){$resp = false; }
//if(empty($config)){$resp = false; }
//valido el servicio
//if(empty($dato) ){$resp = false;}
//concateno el url

 
$respuesta = array("status"=> $status,"message"=> $message ,"data"=> $data );

//$respuesta = array("data"=> $dato );

 echo json_encode($respuesta);





?>