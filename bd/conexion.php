<?php
include '../config/properties.php';

$con=pg_connect("host=$hostBd port=$portBd dbname=$nameBd user=$userBd password=$passwordBd ")or die($mensajeError);

?>

