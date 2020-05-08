
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
			<!-- inicio barra home -->	
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        
                        <li><a class="nav-link" href="#home">Home</a></li>
						       
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	            
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
            
            <div class="col-lg-12">
					<div class="title-box">
						<h2>Home</h2>
						<p>Box Virtual </p>
                        
					</div>
              
				</div>
            
			
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					       <div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h2 class="title">Establecimiento</h2>
                                
								<p class="description">
								 Encuentre su establecimiento y sector SOME.
								</p>
                              <button onclick="mostrarEstablecimientos()"  type="button" class="btn btn-primary">Comenzar</button>
						
							</div>
				</div>
                
				<div class="col-lg-4 col-md-6 col-sm-12">
					
                    	  <div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h2 class="title">Sala de Espera</h2>
								<p class="description">
									Sala de espera de Atención Medica.
                                    
								</p>
          
                                  <button disabled  type="button" class="btn btn-secondary">Paso 2</button>
							</div>
                    
				</div>
                
                
				<div class="col-lg-4 col-md-6 col-sm-12">
				
                         <div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h2 class="title">Acceso Box Virtual</h2>
								<p class="description">
									Ingreso a la Atención Medica.

								</p>
								   <button disabled  type="button" class="btn btn-secondary">Paso 3</button>
							</div>
				</div>
                
                
                
			</div>
		</div>
	</div>
	<!-- End Home -->
            
	
	<!-- Start div Carga contenido  -->
	<div id="cargacontenido" class="appointment-main">
        
        
	</div>
	<!-- End div Carga contenido  -->
	   
	
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