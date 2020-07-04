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


//$json = json_decode( file_get_contents($hostObetenerusuario.$id), true );

$json = json_decode( file_get_contents($hostLlamada2.$id.$configllamada2), true );
$status=  $json['status'];
$message = $json['message'];
$data = $json['data'];


//$resp = true;

//valido variables
//if(empty($host)){$resp = false; }
//if(empty($config)){$resp = false; }
//valido el servicio
//if(empty($json) ){$resp = false;}
//concateno el url


$resp = 200;

//valido el servicio

if($status == 200 ) {
    
///se llama el servicio post 

//API URL
$url = $hostEnviaCoordenadas;

//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST
$datos = array(   
    "rut"       =>  $id,
    "meetingId" =>  $data,
    "latitud"   =>  $_SESSION['lati'],
    "longitud"  =>  $_SESSION['long']
);
    
$payload = json_encode($datos);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);
    
//$respuesta = json_decode( $result, true );  
    
$result=  $result['status'];  
    
    
//close cURL resource
curl_close($ch);

////// termina el servicio post+
    
} else {
    
    $resp = 500;
}




 
$respuesta = array("status"=> $status,"message"=> $message ,"data"=> $data , "resp" => $resp );


 echo json_encode($respuesta);



?>