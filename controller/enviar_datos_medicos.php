<?php

include '../bd/conexion.php';
include '../config/properties.php';


//variable sesion
session_start();
$id=$_SESSION['id'];

//variables de BD
$queryv="SELECT * FROM paciente.videousuario where id_usuario='$id' and vigente=1 order by id desc limit 1" ;
$resv=pg_query($con,$queryv);
$rowsv = pg_num_rows($resv);
$datav = pg_fetch_array($resv);  
$id_video= $datav['id'];

//variables que recibo del ajax
$enfermedad = $_REQUEST['enfermedad'];
$alergico = $_REQUEST['alergico'];
$medicamento= $_REQUEST['medicamento'];
$motivo = $_REQUEST['motivo'];




$resp = true;

//valido variables
if(empty($enfermedad)){$resp = false; }
if(empty($alergico)){$resp = false; }
if(empty($medicamento)){$medicamento="no"; }
if(empty($motivo)){$resp= false; }
//valido el servicio


//si existe un video vigente 
if(!empty($id_video) && $resp==true ) {
    
///se llama el servicio post 

//API URL
$url = $hostCreaDatosMedicos;

//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST
$data = array(
    "idUsuario" => $id,
    "enfermedad" => $enfermedad,
    "alergico" => $alergico,
    "cosasAlergia" => $medicamento,
    "idVideo" => $id_video,
    "motivoConsulta" => $motivo
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
    
if($result == false){$resp = false; }
    
//close cURL resource
curl_close($ch);

////// termina el servicio post+
    
} else {
    
    $resp = false;
}



 
 $respuesta = array("resp"=> $resp);

 echo json_encode($respuesta);



?>