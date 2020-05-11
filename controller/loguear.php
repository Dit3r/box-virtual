<?php

include '../bd/conexion.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];    
$password=$_POST['password'];

$query="SELECT * FROM paciente.usuario where usuario='$username' and contrasena='$password'";
$res=pg_query($con,$query);
$rows = pg_num_rows($res);
$data = pg_fetch_array($res);    
session_start();
 if($rows==1){
 	header('location:../home.php');
 	$_SESSION['username']= $data['usuario'];
 }
else{
	echo "Contraseña incorrecta";
}
}

?>