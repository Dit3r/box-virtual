
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
    <title>Box Virtual Responsivo</title>  
   

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

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
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
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        
                        <li><a class="nav-link" href="#home">Home</a></li>
						<li><a class="nav-link" href="#estableciemientos">Establecimientos</a></li>
                        <li><a class="nav-link" href="#sala_espera">Sala de espera</a></li>
						<li><a class="nav-link" href="#box_virtual">Box virtual</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	
	

	<!-- Home -->
	<div id="home" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Home</h2>
						<p>Box Virtual </p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h3 class="title">Establecimiento</h3>
								<p class="description">
								Encuentra tu establecimiento y sector Some.
								</p>
								<a href="#estableciemientos" class="new-btn-d br-2">OK</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h3 class="title">Sala de Espera</h3>
								<p class="description">
									Sala de espera de Atencion Medica.
                                    <br> <br/>
								</p>
								<a href="#sala_espera" class="new-btn-d br-2">OK</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h3 class="title">Acceso Virtual</h3>
								<p class="description">
									Ingreso a la atencion Medica.
                                    <br> <br/>
								</p>
								<a href="#box_virtual" class="new-btn-d br-2">OK</a>
							</div>
						</div>
						
						
				
				
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- End home -->
	
	<!-- Start form Estableciemientos  -->
	<div id="estableciemientos" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2> Formulario Establecimiento</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Seleccionar datos del establecimiento </h2>
                            
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                             
                              
                                <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <h3>
                                          <i class="fa fa-hospital-o fa-2x" aria-hidden="true">
                                          </i>   Establecimiento 
                                             
                                      </h3> 
                                        
                                        
                                        <label>Region</label>
                                        
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
                                        
                                        
                                         <label>Nombre</label>
                                        <select id="establecimiento" name="establecimiento" class="form-control">
                                       <!--     <option value="Cesfam">Cesfam</option>
											<option value="Cecof">Cecof</option>
											<option value="Consultorio">Consultorio</option>
											<option value="Cosam">Cosam</option>  -->
										
                                        </select>
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3>
                                       
                                            <i class="fa fa-vcard-o fa-2x" aria-hidden="true">
                                            </i>    Sector SOME 
                                        
                                        </h3> 
                                        <select id="sector" name="sector" class="form-control">
                                        <!--    <option value="Rojo">Rojo</option>
											<option value="Verde">Verde</option>
											<option value="Azul">Azul</option>
											<option value="Amarillo">Amarillo</option>  -->
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="confirmar-establecimiento" name="confirmar-establecimiento" class="new-btn-d br-2">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
               
                
			</div>
		</div>
	</div>
	<!-- End Estableciemeintos -->
	
    
    	<!-- Start form Sala de espera  -->
	<div id="sala_espera" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2> Formulario Medico</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Por favor rellenar formulario del motivo  de su consulta</h2>
                        </div>
                        <form>
                            <!-- Form start -->
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
                                 <!-- Select Establecimienti -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="alergico">¿Alergico a algun medicamento?</label>
                                        <select id="alergico" name="alergico" class="form-control">
                                            <option value="Si">Si</option>
											<option value="No" selected>No</option>
											
										
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="medicamento">Si es alergico. Nombre el medicamento</label>
                                        <input id="medicamento" name="medicamento" type="text" placeholder="Nombre del medicamento" class="form-control input-md">
                                       
                                    </div>
                                </div>
                                
                                 <!-- Select Some -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" >Breve detalle motivo de la consulta</label>
                                          <textarea required id="motivo" placeholder="ingrese motivo" class="form-control" ></textarea>     
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="enviar-motivo" onclick="irBox()" name="enviar-motivo"class="new-btn-d br-2">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        
                        <div class="well-title">
                            <h2>Recordatorios e información </h2>
                            <br><br/>
 
                     <h3 class="title">Sus asuntos pendientes</h3>
                <div class="col-md-5 col-sm-6">
					<div class="box-gallery">
						<img src="assets/images/gallery-01.jpg" alt="">
						<div class="box-content" id="asuntos-pendientes">
				 <h3 class="title"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#pendientes">Ver</button></h3>
						</div>
					</div>
				</div>
                            
                    <h3 class="title">Libro Sugerencias</h3>
				<div class="col-md-5 col-sm-6">
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
                <div class="col-md-5 col-sm-6">
					<div class="box-gallery">
						<img src="assets/images/gallery-03.jpg" alt="">
						<div class="box-content">		
						<a href="https://www.minsal.cl/" target="_blank" ><h3 class="title"  >Ver</h3></a>	
							<ul class="icon">
													
							</ul>
						</div>
					</div>
				</div>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Sala de espera -->
    
    
    
	
	<!-- Start Box-virtual -->
	<div id="box_virtual" class="team-box" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Box Virtual</h2>
						<p>Se efectuara una video LLamada. </p>
					</div>
				</div>
			</div>
			
            
			<div class="row">
                <div class="col-md-4 col-sm-6">
                  <!--div inhabilitado-->
                </div>

                <div class="col-md-4 col-sm-6" id="llamada" >
                    <div class="our-team">
                        <div class="pic">
                            <img src="assets/images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Doctor</h3>
                            <span class="post">Llamada no disponible</span>
                        <ul class="social">
                              <li>  <a onclick="recargar()"><i class="fa fa-microphone-slash" aria-hidden="true" title='camara bloqueada'></i></a>   
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                  <!--div inhabilitado-->
                </div>
                
                
            </div>
			
		</div>
	</div>
	
	<!-- End Team -->
	

	
	
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
        
        <!-- Modal asuntos pendientes -->
<div class="modal fade" id="pendientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recordatorios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        No se encontraron asuntos pendientes...
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal"> Aceptar</button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
        
        <!-- End Modal Libro sugerencia -->
        
        
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