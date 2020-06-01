<?php

include '../bd/conexion.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];    
$password=$_POST['password'];

//para utilizar servicio
//$data = json_decode( file_get_contents('http://localhost:8083/api/v1/usuarios/'.$username), true );
 
$query="SELECT * FROM paciente.usuario where id='$username' and contrasena='$password'";
$res=pg_query($con,$query);
$rows = pg_num_rows($res);
$data = pg_fetch_array($res);  
       
  
    
session_start();
 if(trim($data['contrasena']) == $password){
 	header('location:../home.php');
 	$_SESSION['username']= $data['usuario'];
    $_SESSION['id'] =  $data['id'];
    $_SESSION['rut'] =  $data['rut'];
 }
else{
	echo "Contraseña incorrecta" ;
}
}

?>