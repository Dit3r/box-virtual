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

<!--    
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  -->
    
   
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
	    <form> 
			<input type="text"  id="username" placeholder="Ingrese su Rut sin guión ni puntos ej: 123456789">
			<input type="password"  id="password" placeholder="Ingrese su Contraseña">
            <div id="procesa_login">
			<input type="submit" onclick="login()" value="Ingresar" id="btn_login" > 
            </div>
               
		</form>
        
        <button class="button" onclick="abrirModalRegistro()" >Registrar</button>
           
	  </div><!--end of formbox-->
     
   
<!--modal Registro-->

    <div class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro Paciente</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
          <span class="btn btn-danger" aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body" id="bodyForm">
        <form id="formRegistro">
          <div class="form-group">
         <!--   <label for="recipient-name" class="col-form-label">Nombres:</label> -->
            <input type="txt_registro" class="form-control" id="nombres" onblur="ValidaColor(this.id)" required placeholder="Nombres">
          </div>
            
          <div class="form-group">
        <!--    <label class="col-form-label">Apellido Paterno:</label> -->
            <input type="txt_registro" class="form-control" id="paterno" onblur="ValidaColor(this.id)" required placeholder="Apellido Paterno">
          </div>
            
          <div class="form-group">
      <!--     <label  class="col-form-label">Apellido Materno:</label> -->
            <input type="txt_registro" class="form-control" id="materno" onblur="ValidaColor(this.id)" required placeholder="Apellido Materno">
          </div>
            
          <div class="form-group">
        <!--    <label  class="col-form-label">Rut/Dni: </label> -->
            <input type="txt_registro" maxlength="10" class="form-control" id="rut" onkeyup="ValidaRut(this.value)" required placeholder="Rut: ej: 12345678-9">
          </div> 
            
           <div class="form-group">
        <!--    <label  class="col-form-label">Correo:</label> -->
            <input type="txt_registro" class="form-control" id="correo" onkeyup="revisa_email(this.value)"  required placeholder="Correo/Email">
            </div>
            
            <div class="form-group">
        <!--    <label  class="col-form-label">Confirmar correo:</label> -->
            <input type="txt_registro" class="form-control" id="confirma_correo" onblur="ValidaColor(this.id)" required placeholder="Confirme Correo/Email">
            </div>
            
          <div class="form-group">
       <!--  <label  class="col-form-label">Número Celular:</label> -->
            <input type="txt_registro" class="form-control" id="celular" maxlength="12" onkeyup="ValidateUSPhoneNumber(this.value)" required placeholder="Número Celular ej: +56981234567">
          </div> 
            
          <div class="form-group"> 
         <!--     <label  class="col-form-label">Número Fijo:</label> -->
            <input type="txt_registro" class="form-control" id="fijo" placeholder="Número Teléfono Fijo ej: 2123456" onkeypress="ValidaFijo(this.value)" maxlength="9">
          </div>
            
          <div class="form-group">
          <!--   <label  class="col-form-label">Fecha nacimiento:</label> -->
            <input type="date" class="form-control" id="fecha_nacimiento" required placeholder="Fecha nacimiento" onblur="ValidaColor(this.id)" >
    
          </div>
            
            <div class="form-group">
       <!--      <label  class="col-form-label">Direccion:</label> -->
            <input type="txt_registro" class="form-control" id="direccion" required placeholder="Dirección" onblur="ValidaColor(this.id)">
           </div>
            
            <div class="form-group">
        <!--     <label  class="col-form-label">Contraseña:</label> -->
            <input type="password_registro" class="form-control" id="contrasena" required placeholder="Cree una Contraseña" onblur="ValidaColor(this.id)">
           </div>
            
            <div class="form-group">
         <!--    <label  class="col-form-label">Confirme Contraseña:</label> -->
            <input type="password_registro" class="form-control" id="confirma_contrasena" required placeholder="Confirme Contraseña" onblur="ValidaColor(this.id)">
           </div> 
    
        </form>
      </div>
      <div class="modal-footer" id="procesa_registro">
        <button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>
        
    
    
        <!--modal exito -->
<div class="modal fade" id="exito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opercación exitosa</h5>
      </div>
      <div class="modal-body">
        Registro exitoso.
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