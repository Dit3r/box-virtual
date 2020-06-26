<?php

include '../bd/conexion.php';
include '../config/properties.php';


//variables que recibo del ajax
$nombres = $_REQUEST['nombres'];
$paterno = $_REQUEST['paterno'];
$materno= $_REQUEST['materno'];
$rut = $_REQUEST['rut'];
$correo = $_REQUEST['correo'];
$celular = $_REQUEST['celular'];
$fijo= $_REQUEST['fijo'];
$fecha_nacimiento= $_REQUEST['fecha_nacimiento'];
$direccion=$_REQUEST['direccion'];
$contrasena=  $_REQUEST['contrasena'];
$confirma_contrasena= $_REQUEST['confirma_contrasena'];




$query = "INSERT INTO  paciente.paciente (nombres,paterno,materno,rut,correo,celular,fijo,fecha_nacimiento,direccion,id,contrasena) VALUES ('$nombres','$paterno','$materno','$rut','$correo','$celular','$fijo','$fecha_nacimiento','$direccion,'$id','$contrasena')";
//execute the query here
$result = pg_query($con, $query); //if you are using pg_query and $conn is the connection resource
// Interni

/*
//variables de BD
$queryv="SELECT * FROM paciente.paciente where id_usuario='$id' and vigente=1 order by id desc limit 1" ;
$resv=pg_query($con,$queryv);
$rowsv = pg_num_rows($resv);
$datav = pg_fetch_array($resv);  
$id_video= $datav['id'];

*/
$resp = true;

if(empty($result)){
    
$resp = false;
    
}




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


 
 $respuesta = array("resp"=> $resp);

 echo json_encode($respuesta);



?>