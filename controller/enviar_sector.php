<?php

include '../bd/conexion.php';
include '../config/properties.php';

session_start();
$uname=$_SESSION['username'];
$id=$_SESSION['id'];

$queryv="SELECT * FROM paciente.videousuario where id_usuario='$id' order by id desc limit 1" ;
$resv=pg_query($con,$queryv);
$rowsv = pg_num_rows($resv);
$datav = pg_fetch_array($resv);  

//variables que recibo
$sector = $_REQUEST['sector'];


$resp = true;
$result="no se consumio el servicio";

//valido variables
if(empty($sector)){$resp = false; }

//si el estado de la ultima llamada del usuario es 1 y esta vigente 1 o si no tiene ningun video ,crea una llamada nueva 
 
if ( ($datav['estado']==1 && $datav['vigente'] ) ||empty($datav) ) {

///se llama el servicio post 

//API URL
$url = $hostCrearVideo;

//create a new cURL resource
$ch = curl_init($url);

date_default_timezone_set('America/Santiago');
    
//setup request to send json via POST
$data = array(
    "idUsuario" => $id,
    "estado" => 0,
    "vigente" => 1,
    "fechaHora" => date('Y-m-d\TH:i:s')
);
$payload = json_encode($data);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

////// termina el servicio post
    
}
else{
    
    $resp=false;
}


 $respuesta = array("resp"=> $resp,"sector" => $sector , "result" => $result);

 echo json_encode($respuesta);



?>