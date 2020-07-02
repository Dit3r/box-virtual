<?php

include '../bd/conexion.php';
include '../config/properties.php';
include_once '../logger.php';
//if($_SERVER['REQUEST_METHOD']=="POST"){
    
//$username=$_POST['username'];    
//$password=$_POST['password'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$lati=  $_REQUEST['lati'];
$long=  $_REQUEST['long'];

$passwordMD5=md5($password);
//para utilizar servicio
//$data = json_decode( file_get_contents($hostObetenerusuario.$username), true );


$query="SELECT * FROM paciente.paciente where id='$username' and contrasena='$passwordMD5'";
$res=pg_query($con,$query);
$rows = pg_num_rows($res);
$data = pg_fetch_array($res);  

       
$resp = true;


 if(!empty($data)){
     
     
    session_start(); 
 	//header('location:../home.php');
 	$_SESSION['username']= $data['nombres'];
    $_SESSION['id'] =  $data['id'];
    $_SESSION['rut'] =  $data['rut'];
    $_SESSION['lati'] = $lati;
    $_SESSION['long'] = $long;
     
 }
else{
    
    $resp= false;
}

    
      
     $respuesta = array("resp"=> $resp , "ubicacion" => $lati);

     echo json_encode($respuesta); 
//}

?>