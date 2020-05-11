<?php
include '../bd/conexion.php';
//aca se pondra un estado de base de datos
$user="admin";
$pas="123456";
$query="SELECT * FROM paciente.usuario where usuario='$user' and contrasena='$pas'";
$res=pg_query($con,$query);
$rows = pg_num_rows($res);
$data = pg_fetch_array($res);    
session_start();
 if(!empty($data['usuario'])){
echo ' 
                    <div class="our-team">
                        <div class="pic">
                            <img src="assets/images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Doctor</h3>
                            <span class="title">Ir a video llamada</span>
                            <ul class="social">
                                <li><a href="" title="camara desbloqueada" onclick="recargar()"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>';
 }
else{
    
    echo '
    
              <div class="our-team">
                        <div class="pic">
                            <img src="assets/images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Doctor</h2>
                            <span class="title">Llamada no disponible</span>
                            <ul class="social">
                                <li><a onclick="recargar()"><i class="fa fa-microphone-slash" aria-hidden="true" title="camara bloqueada"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>

    
    ';
}


?>