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

$url= "https://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=$id&width=700&heigth=500";

 if($datav['estado'] == 1){
echo '                      <input id="url" type="hidden" value="'.$url.'">
                              <ul class="colores">
                              <li>  
                                  <a onclick="mostarModalBox()" type="button" class="btn btn-success"  >
                                  
                                 <i class="fa fa-video-camera fa-2x" aria-hidden="true" title="camara desbloqueada"  >
                                </i>
                                
                                    <p class="bg-success text-white" > 
                                       Lamada Disponible...
                                    </p>  
                                  </a>   
                                </li>
                            </ul>   ';
 }
else{
    
    echo '<ul class="colores">
                              <li>  
                                  <a onclick="recargarLlamada()" type="button" class="btn btn-danger" >
                                  <i class="fa fa-microphone-slash fa-2x" aria-hidden="true" title="camara bloqueada">
                                  </i>
                                    <p class="bg-danger text-white"> 
                                        Lamada no disponible...
                                    </p>  
                                  </a>   
                                </li>
                            </ul> ';
}


?>