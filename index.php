<?php
include '../bd/conexion.php';
include '../config/properties.php';
include_once '../logger.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    
   
     <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <script src="assets/js/login.js"></script>
    <link rel="stylesheet" href="assets/css/loaders.css">
    
</head>
    

    
<body>
    

    
	<div id="log" class="formbox">
		<h2>Ingresar al Box Virtual</h2>
	<form > 
			<input type="text"  id="username" placeholder="Ingrese su Rut sin guión ni puntos ej: 123456789">
			<input type="password"  id="password" placeholder="Ingrese su Contraseña">
            <div id="procesa_login">
			<input type="submit" onclick="login()" value="Ingresar" id="btn_login" >   
            </div>
		
		</form>
	</div><!--end of formbox-->
    
    
       <!--modal fracaso -->
<div class="modal fade" id="fracaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
      </div>
      <div id="datovacio" class="modal-body">
        Usuario o contraseña incorrectos.
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
        
        <button type="submit" class="btn btn-danger" data-dismiss="modal"> Aceptar</button>
      </div>
    </div>
  </div>
</div>

        
</body>
    
    
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
    
    
        
  
       
</html>