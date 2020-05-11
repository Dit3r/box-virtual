<?php
include '../bd/conexion.php';
//aca se pondra un estado de base de datos
session_start();
$user=$_SESSION['username'];

$queryid="select id from paciente.usuario where usuario ='$user'";
$resid=pg_query($con,$queryid);
$dataid = pg_fetch_array($resid);
$id=$dataid['id'];

$queryv="SELECT * FROM paciente.videousuario where id_usuario='$id'";
$resv=pg_query($con,$queryv);
$rowsv = pg_num_rows($resv);
$datav = pg_fetch_array($resv);    

 if($datav['estado'] == 1){
echo ' 
                    <div class="our-team">
                        <div class="pic">
                            <img src="assets/images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Llamada Disponible</h3>
                            <span class="title">Presiona para ir a la videollamada</span>
                            <ul class="social">
                                <li><a href="http://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id='.$id.'&width=700&heigth=500 " title="camara desbloqueada" onclick="recargarLlamada()" target="_blank"><i class="fa fa-video-camera fa-3x" aria-hidden="true"></i></a></li>
                                
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
                            <h2 class="title">Llamada aún no disponible</h2>
                            
                            <span class="title">Espere un momento por favor..</span>
                            <ul class="social">
                                <li><a onclick="recargarLlamada()"><i class="fa fa-microphone-slash fa-3x" aria-hidden="true" title="camara bloqueada"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>

    
    ';
}


?>