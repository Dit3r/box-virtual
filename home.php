
<?php
include '../bd/conexion.php';

session_start();
$uname=$_SESSION['username'];

 if (empty($uname)) { 
  header("Location:index.php");
 }

?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Box Virtual</title>  
   

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="assets/css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <link rel="stylesheet" href="assets/css/loaders.css">
    
    

</head>
    
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
                    
					   <div class="left-top">
						<a class="new-btn-d br-2" href="#"><span><i class="fa fa-user-o fa-2x" aria-hidden="true"></i> Bienvenido: <?php echo "$uname"; ?></span></a>
					   </div>
                    
                </div>
                    
                <div class="col-lg-4">
                    
                       <div class="left-top">
                        <a href="logout.php" class="new-btn-d br-2" ><span><i class="fa fa-power-off fa-2x" aria-hidden="true"></i> Cerrar Sesion
                        </span></a>
                       </div>
                        
                </div>
                    
   		
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="home.php"><img src="assets/images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
			<!-- inicio barra home -->	
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        
                        <li><a class="nav-link"  href="#home"> <label id="cambiar">Home</label> </a></li>
						       
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	            
	<!-- Start home -->
	<div id="home" class="blog-box">
		<div class="container">
            
          
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12" >
					       <div class="serviceBox">
								<div class="service-icon" id="div_icono_establecimiento" ><i id="icono_establecimiento" class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h2 class="title">Establecimiento</h2> 
                                <div id="label_establecimiento">
                                <p class="text-info" >
								 Paso 1. Seleccione su establecimiento.
								</p>
                               </div>
                               <div id="paso1">
                                   <button onclick="mostrarModalEstablecimiento()" class="btn btn-primary submit"  >Comenzar ⮕</button>
                               </div>
                               
							</div>
				</div>
                
                
                	<div class="col-lg-3 col-md-6 col-sm-12">
					       <div class="serviceBox">
								<div class="service-icon" id="div_icono_some" ><i class="fa fa-address-card-o" aria-hidden="true"></i></div>
								<h2 class="title">Sector Some</h2>
                               <div id="label_some">
                                <p class="text-info" >
								Paso 2. Seleccione su sector SOME.
								</p>
                               </div>
                               <div id="paso2">
                                    <button disabled  type="button" class="btn btn-secondary" >Paso 2</button>
                               </div>
                              
							</div>
				</div>
                
				<div class="col-lg-3 col-md-6 col-sm-12">   
                    	  <div class="serviceBox">
								<div class="service-icon"id="div_icono_sala_espera"  ><i class="fa fa-clock-o" aria-hidden="true"></i></div>
								<h2 class="title">Sala de Espera</h2>
                              <div id="label_sala_espera">
                                <p class="text-info" >
									Paso 3 . Sala de espera de Atención Medica.      
								</p>
                              </div>	
                              <div id="paso3">
                                  <button disabled  type="button" class="btn btn-secondary" >Paso 3</button>
                              </div>
                                  
							</div>
				</div>
                
                
				<div class="col-lg-3 col-md-6 col-sm-12">
                         <div class="serviceBox">
								<div class="service-icon" id="div_icono_box" ><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<h2 class="title">Acceso Box Virtual</h2>
                             <div id="label_box">
                                 <p class="text-info" >
									Paso 4. Ingreso a la Atención Medica.
								</p>
                             </div>
                             <div id="paso4"> 
                                 <button disabled  type="button" class="btn btn-secondary" >Paso 4</button>
                             </div>
								  
							</div>
				</div>
                
                
                
                
               
			</div> 
            
 
		</div>
        
	</div>
	<!-- End Home -->
    
   
            
	

	   
	
	<!-- End Contact -->
	
	<!-- Start Subscribe -->
	<div class="subscribe-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-inner text-center clearfix">
						<h2>Subscribe</h2>
						<p>Subscripciones</p>
						<form action="#" method="post">
							<div class="form-group">
								<input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
							</div>
							<div class="form-group">
								<button type="submit" class="new-btn-d br-2">
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Subscribe -->
        
    
    
    
    
<!-- modal establecimientos-->
        
 <div class="modal fade" id="modal_establecimientos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
    <!-- de aqui empieza el contenido -->    
      <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Establecimiento</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Seleccionar datos</h2>
                            
                        </div>
                        <form method="post" id="form_establecimientos">
                            <!-- Form start -->
                            <div class="row">
                             
                              
                                <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <h3>
                                          <i class="fa fa-hospital-o fa-2x" aria-hidden="true">
                                          </i>   Establecimiento 
                                             
                                      </h3> 
                                        
                                        
                                        <label>Región</label>
                                        
                                        <select id="region" name="region" class="form-control" onchange="cambiaComuna()">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                        
                                         <label>Comuna</label>
                                        <select id="comuna" name="comuna" class="form-control" onchange="cambiaEstablecimiento()">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                        
                                        
                                         <label>Nombre , Dirección</label>
                                        <select id="establecimiento" name="establecimiento" class="form-control">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                      <!--  
                                        <label>Direccion</label>
                                        <input id="direccion" name="direccion" class="form-control">
                                        -->
                                        
                                    </div>
                                </div>
                            
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div id="div_boton_est" class="form-group">
                                  
                                          <input id="confirmar_establecimiento" onclick="confirma_establecimiento()" class="btn btn-primary submit"  value="Confirmar" type="button" />
                                           <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cerrar"/>
                
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
                
			</div>
		</div> 
        
        <!-- aqui termina  el contenido --> 
        
    </div>
  </div>
</div>
    
<!-- modal  sector some--->
        
 <div class="modal fade" id="modal_some" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
    <!-- de aqui empieza el contenido -->    
      <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Sector SOME</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="well-block">
                       
                        <form method="post" id="form_some">
                            <!-- Form start -->
                            <div class="row">
                                                             
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3>
                                            <i class="fa fa-vcard-o fa-2x" aria-hidden="true">
                                            </i> Sector(color) SOME 
                                       
                                        </h3> 
                            
                                        <div class="row">
                                            
                                        <div style="background: #dc3545;" class="colores" >
                                        <label class="radio-inline" class="form-control" >Rojo</label>
                                         <input value="rojo" name="sector" type="radio" checked >
                                        </div>
                                         
                                         <div style="background: #007bff;" class="colores" >
                                        <label class="radio-inline" class="form-control" >Azul</label>
                                         <input value="azul" name="sector" type="radio">
                                        </div>
                                         
                                        <div style="background: #ffc107;" class="colores">
                                          <label class="radio-inline" class="form-control">Amarillo</label>
                                         <input value="amarillo" name="sector" type="radio"> 
                                        </div>
                                        
                                         <div style="background: #28a745;" class="colores">
                                         <label class="radio-inline" class="form-control">Verde</label>
                                         <input value="verde" name="sector" type="radio">
                                        </div>
                                                 
                                        </div>    
                         
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div id="div_boton_some" class="form-group">
                                  
                                          <input id="confirmar_establecimiento" onclick="confirma_some()" class="btn btn-primary submit"  value="Confirmar" type="button" />
                                           <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cerrar"/>
                
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
                
			</div>
		</div> 
        
        <!-- aqui termina  el contenido --> 
        
    </div>
  </div>
</div>
        
    
    
    
    
    <!-- modal  sector sala de espera--->
<div id="modal_sala_espera" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
    <!-- empieza contenido-->
        <div id="cargacontenido" class="main-content">
        <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Sala de espera</h2>
						
					</div>
				</div>
			</div>
            
		<div class="row">
                <div class="col-md-4 col-sm-6">
                    
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#datosmedicos" aria-expanded="false" aria-controls="collapseExample" id="bt_form_medico" >Formulario Médico ▼ </button> 
                    
                    <div class="collapse" id="datosmedicos">
                       <div class="card card-body">
                        
                           <!-- Form start -->
                            <form> 
                            <div class="row">
                             
                                <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="enfermedad">¿Presenta alguna de estas enfermedades?</label>
                                        <select id="enfermedad" name="enfermedad" class="form-control">
                                            <option value="Diabetes">Diabetes</option>
											<option value="Hipertension">Hipertensión</option>
                                            <option value="Cardiovascular">Cardiovascular</option>
											<option value="Asma">Asma</option>
											<option value="Ninguna" selected>Ninguna</option>
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Some -->
                                 <!-- Select alergia -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="alergico">¿Es Alérgico?</label>
                                        <select id="alergico" name="alergico" class="form-control">
                                            <option value="Si">Si</option>
											<option value="No" selected>No</option>			
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="medicamento">Si es alérgico,indique a que cosas.</label>
                                    <input id="medicamento" name="medicamento" type="text" placeholder="Nombre las cosas" class="form-control input-md">
                                       
                                    </div>
                                </div>
                                
                                 <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" >Breve detalle motivo de la consulta</label>
                                          <textarea required id="motivo" placeholder="Ingrese motivo" class="form-control" ></textarea>     
                                    </div>
                                </div>
                                <!-- Button -->
                                
                                    
                                     <div id="div_boton_sala" class="form-group">
                                         
                                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#datosmedicos" aria-expanded="false" aria-controls="collapseExample" >Ocultar ▲</button> 
                                                  
                                  
                                    <button id="enviar_motivo" type="button" class="btn btn-primary"onclick="confirma_datos_medicos()" >Enviar </button>
                                         
                                    </div>
                                    
                                
                            </div>
                        </form>
                        <!-- form end -->
                           
                         </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" id="llamada" >
                           
                        <ul class="social">
                              <li>  
                                  <a onclick="recargarLlamada()" type="button" class="btn btn-danger" >
                                  <i class="fa fa-microphone-slash fa-2x" aria-hidden="true" title="camara bloqueada">
                                  </i>
                                    <p class="bg-danger text-white"> 
                                        Lamada no disponible..
                                    </p>  
                                  </a>   
                                </li>
                            </ul>  
                          
                </div>


                <div class="col-md-4 col-sm-6">
                    
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#recordatorios" aria-expanded="false" aria-controls="collapseExample" id="bt_form_medico" >Recordatorios Utilidades ▼</button> 
                    
                    <div class="collapse" id="recordatorios">
                       <div class="card card-body">
                           
                    
                <h3 class="title">Sus asuntos pendientes</h3>
                <div class="col-md-12">
					<div class="box-gallery">
						<img src="assets/images/gallery-01.jpg" alt="">
						<div class="box-content" id="asuntos-pendientes">
				 <h3 class="title"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#pendientes">Ver</button></h3>
						</div>
					</div>
				</div>
                            
                    <h3 class="title">Libro Sugerencias</h3>
				<div class="col-md-12">
					<div class="box-gallery">
						<img src="assets/images/gallery-02.jpg" alt="">
						<div class="box-content" id="libro-sugerencias">		
				<h3 class="title"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#libro-sugerencia">Ir</button></h3>
							<ul class="icon">
														
							</ul>
						</div>
					</div>
				</div>
                           
                    <h3 class="title">Información general de utilidad</h3>        
                <div class="col-md-12">
					<div class="box-gallery">
						<img src="assets/images/gallery-03.jpg" alt="">
						<div class="box-content">		
						<a href="https://www.minsal.cl/" target="_blank" ><h3 class="title"  >Ver</h3></a>	
							<ul class="icon">
													
							</ul>
						</div>
					</div>
				</div>
                           
                           
                           <div class="form-group">
                                  
                                         
                                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#recordatorios" aria-expanded="false" aria-controls="collapseExample" >Ocultar ▲</button> 
                                         
                             </div>
                           
                           
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        
        </div>
           
        </div>
    <!-- termina contenido ---->  
        
           <div class="modal-footer">
             <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cerrar"/>
           </div>
        
    </div>
  </div>
</div>

<!--- fin modal sala espera----->    
    

    
    
        <!-- Modal asuntos pendientes -->
<div class="modal fade" id="pendientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recordatorios</h5>
      </div>
      <div class="modal-body">
        No se encontraron asuntos pendientes...
      </div>
      <div class="modal-footer">
    
       <button type="button" class="btn btn-primary" onclick="$('#pendientes').modal('hide')" > Aceptar</button> 
      </div>
    </div>
  </div>
</div>
        <!-- Modal asuntos pendientes -->
        
  
        <!-- star modal libro sugerencia-->
        
<div class="modal fade" id="libro-sugerencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva sugerencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Texto sugerencia:</label>
            <textarea class="form-control" id="texto-Sugerencia"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="$('#libro-sugerencia').modal('hide')">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
        
        <!-- End Modal Libro sugerencia -->
    
    
    <!--modal exito -->
<div class="modal fade" id="exito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opercación exitosa</h5>
      </div>
      <div class="modal-body">
        Datos enviados exitosamente.
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-success" data-dismiss="modal"> Aceptar</button>
      </div>
    </div>
  </div>
</div>
    
    
     <!--modal fracaso -->
<div class="modal fade" id="fracaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
      </div>
      <div id="datovacio" class="modal-body">
        Sus datos no son válidos.
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal"> Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!--modal error -->
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
      </div>
      <div class="modal-body">
        Error al procesar los datos.
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Aceptar</button>
      </div>
    </div>
  </div>
</div>

    
    
        
        
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">Southcode. &copy; 2020 <a href="#">Box Virtual</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.pogo-slider.min.js"></script> 
	<script src="assets/js/slider-index.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
	<script src="assets/js/isotope.min.js"></script>	
	<script src="assets/js/images-loded.min.js"></script>	
    <script src="assets/js/custom.js"></script>
        
   <script src="assets/js/util.js"></script>
        
</body>
</html>