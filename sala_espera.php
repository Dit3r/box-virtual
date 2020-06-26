
<?php
include '../bd/conexion.php';
include 'config/properties.php';

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
             
                <div class="col-md-2">
                    <div class="left-top2" >
                    <a class="navbar-brand text-success" href="home.php"><img src="assets/images/favicon.ico" alt="image"><span class="title">Box Virtual</span></a>
                    </div>
                </div>
                      
				<div class="col-md-6">
                    
					   <div class="left-top">
						<a class="new-btn-d br-2" href="#"><span><i class="fa fa-user-o fa-2x" aria-hidden="true"></i> Bienvenido: <?php echo "$uname"; Rut:$_SESSION['rut'] ;  ?></span></a>
					   </div>
                    
                </div>
                    
                <div class="col-md-4">
                    
                       <div class="left-top">
                        <a href="logout.php" class="new-btn-d br-2" ><span><i class="fa fa-power-off fa-2x" aria-hidden="true"></i> Cerrar Sesion
                        </span></a>
                       </div>
                        
                </div>
                
                   
   		
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
    
    <!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" id>
						<div class="title-box" id="loader">
							<h2>Box Virtual</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12" >
								<h2> Bienvenido a Box Virtual </h2>
								<p> Aqui un texto...</p>
								<a href="#" class="new-btn-d br-2">Ir a otra pagina de info</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="assets/images/home1.jpg" alt="">
										</li>
										<li>
											<img src="assets/images/home2.jpg" alt="">
										</li>
										<li>
											<img src="assets/images/home3.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
    
	            
    <!-- Start Home nuevo -->
	<div id="home" class="gallery-box">
		<div class="container">
            
		
			<div class="row">
                
                <div class="col-lg-12">
						<div class="title-box">
							<h2>Cuídate con nosotros</h2>
						</div>
					</div>
                
                 
				<div class="col-md-6" id="div_paso1">
					<div class="blog-inner">
                        
                     <iframe  sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, SÕNTOMAS CORONAVIRUS - Hazlo por ti y por todos #CuidemonosEntreTodos" src="https://www.youtube.com/embed/TpbCKzw4k60" allowfullscreen>
                     </iframe>
                        
					</div>
				</div>
                
                
				<div class="col-md-6" id="div_paso2">
					<div class="blog-inner">
                         
                        
                        <iframe  sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, PREVENCI”N CORONAVIRUS - Hazlo por ti y por todos #CuidemonosEntreTodos" src="https://www.youtube.com/embed/xsk8VS5EsR4" allowfullscreen>
                        </iframe>
                        
					</div>
				</div>
                
                
                </div>
            
            <!-- mitad del div -->
            
            <div class="row">
                
                
                
				<div class="col-md-6" id="div_paso3" >
					<div class="blog-inner">
                        
                        <iframe  sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, AISLAMIENTO DOMICILIARIO ñ Hazlo por ti y por todos #CuidÈmonosEntreTodos" src="https://www.youtube.com/embed/TUt3CrW_R-4" allowfullscreen>
                        </iframe>
                        
					</div>
				</div>
                
                <div class="col-md-6" id="div_paso4">
                    <div class="blog-inner">
				
                     <iframe  sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, Aislamiento Domiciliario - Hazlo por ti y por todos #CuidÈmonosEntreTodos" src="https://www.youtube.com/embed/2RmM42xwxgM" allowfullscreen>
                     </iframe>
                    </div>
				</div>
                
                
			</div>
                
                 
            
		</div>
        
        
	</div>
	<!-- End home nuevo-->
            
	
    

	   
	
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
        
    
    
    
    
    <!-- modal  sector sala de espera--->
<div id="modal_sala_espera" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
    <!-- empieza contenido-->
    <div id="cargacontenido" class="modal-body">
            
        <html>
        <head>
        <meta charset="UTF-8">
        <title>APS Box</title>
        <script src="https://videoqa.boxvirtual.cl/external_api.js"></script>
        </head>
        <body>
        <div class="conf_div" id="conf_div" class="modal-body">
        </div>
        </body>
        </html> 
    
    </div>
    <!-- termina contenido ---->  
        
           <div class="modal-footer">
             <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Ocultar"/>
             <input type="button" class="btn btn-danger" onclick="mostrarModalConfirmaSalir()" value="Salir"/>
           </div>
        
    </div>
  </div>
</div>

<!--- fin modal sala espera----->    
    
    
    
    
    <!-- modal  loader--->
<div id="modal_loader" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
    <!-- empieza contenido-->
        <div id="cargaloader" class="modal-body">

            
        </div>
    <!-- termina contenido ---->  
           <div class="modal-footer">
               <input type="button" class="btn btn-danger" onclick="mostrarModalConfirmaSalir()" value="Salir"/>
           </div>
        
    </div>
  </div>
</div>

<!--- fin modal loader----->    
    

    
    
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
        <h5 class="modal-title" id="exampleModalLabel"> <p class="text-danger">Error</p> </h5>
      </div>
      <div id="datovacioerror" class="modal-body">
        Error al procesar los datos.
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Aceptar</button>
      </div>
    </div>
  </div>
</div>

    <!--- modal confirmar salir de todo---->
    <div id="confirmar" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><p class="text-danger">Advertencia</p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea volver al comienzo y perder el progreso actual?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="confirmaSalir()">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
    
    
        
        
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name"><a href="https://www.southcode.cl" target="_blank" >www.southcode.cl</a> &copy; 2020 <a href="#">Box Virtual</a></p>
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
    <!-- el id para usarlo internamente en jscript -->
    <script type="text/javascript">
     var id =   <?php echo $_SESSION['id']; ?>
    </script>

        
</body>
</html>