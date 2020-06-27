<?php

include '../bd/conexion.php';
include '../config/properties.php';


//variables que recibo del ajax
$nombres = $_REQUEST['nombres'];
$paterno = $_REQUEST['paterno'];
$materno= $_REQUEST['materno'];
$rut = $_REQUEST['rut'];
$correo = $_REQUEST['correo'];
$confirmaCorreo= $_REQUEST['confirma_correo'];
$celular = $_REQUEST['celular'];
$fijo= $_REQUEST['fijo'];
$fecha_nacimiento= $_REQUEST['fecha_nacimiento'];
$direccion=$_REQUEST['direccion'];
$contrasena= $_REQUEST['contrasena'];
$confirma_contrasena= $_REQUEST['confirma_contrasena'];

$contrasenaMD5 = md5($contrasena);


$id= intval(preg_replace('/[^0-9]+/', '', $rut), 10); 


$query = "INSERT INTO paciente.paciente (contrasena,fijo,direccion,correo,nombres,paterno,materno,id,celular,fecha_nacimiento,rut)
VALUES ('$contrasenaMD5','$fijo','$direccion','$correo','$nombres','$paterno','$materno',$id,'$celular','$fecha_nacimiento','$rut')";

//execute the query here
$result = pg_query($con,$query); //if you are using pg_query and $conn is the connection resource
// Interni

$resp = true;

if($result == false){$resp = false; }


/*
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


*/


 
 //$respuesta = array("resp"=> $result);

//$respuesta = array("resp"=> $nombres." ".$materno." ".$paterno." ".$rut." ".$correo." ".$celular." ".$fijo." ".$fecha_nacimiento." ".$direccion." ".$contrasena." ".$confirma_contrasena);

$respuesta = array("resp"=> $resp);

 echo json_encode($respuesta);



?>