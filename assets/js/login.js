////inicio funcion loguear ////

 

function login(){
        var parametros = {
               "username" : $('#username').val(),
               "password" : $('#password').val(),
               "lati" : $('#lati').val(),
               "long"  : $('#long').val()
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/loguear.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#procesa_login").html("<div class='loaderboton' style='margin:0 auto;'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    
                    if(response.ubicacion != 0){
                     
                    
                    if(response.resp){
                   
                        window.location.href = "sala_espera.php";
                        
                    } else{
                        $("#fracaso").modal('show');
                        $('#username').focus();
                        $("#procesa_login").html('<input type="submit" onclick="login()" value="Ingresar" id="btn_login" >');
                           
                    }
                    
                }
                   else{
                           $("#error_ubicacion").modal('show');
                           $("#procesa_login").html('<input type="submit" onclick="login()" value="Ingresar" id="btn_login" >');
            
                         }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                   $("#error").modal('show');
                   $("#procesa_login").html('<input type="submit" onclick="login()" value="Ingresar" id="btn_login" >');
                }
               
        });
}


function abrirModalRegistro(){

$("#modal_registro").modal('show');

}




function recargaForm() {
    
  $('#bodyForm').html('<form id="formRegistro"><div class="form-group"><!--  <label for="recipient-name" class="col-form-label">Nombres:</label> --><input type="txt_registro" class="form-control" id="nombres" onblur="ValidaColor(this.id)" required placeholder="Nombres"></div><div class="form-group"><!-- <label class="col-form-label">Apellido Paterno:</label> --><input type="txt_registro" class="form-control" id="paterno" onblur="ValidaColor(this.id)" required placeholder="Apellido Paterno"></div><div class="form-group"><!--  <label  class="col-form-label">Apellido Materno:</label> --><input type="txt_registro" class="form-control" id="materno" onblur="ValidaColor(this.id)" required placeholder="Apellido Materno"></div><div class="form-group"><!--  <label  class="col-form-label">Rut/Dni: </label> --><input type="txt_registro" maxlength="10" class="form-control" id="rut" onkeyup="ValidaRut(this.value)" required placeholder="Rut: ej: 12345678-9"></div> <div class="form-group"><!--  <label  class="col-form-label">Correo:</label> --><input type="txt_registro" class="form-control" id="correo" onkeyup="revisa_email(this.value)"  required placeholder="Correo/Email"></div><div class="form-group"><!--  <label  class="col-form-label">Confirmar correo:</label> --><input type="txt_registro" class="form-control" id="confirma_correo" onblur="ValidaColor(this.id)" required placeholder="Confirme Correo/Email"></div><div class="form-group"><!-- <label  class="col-form-label">Número Celular:</label> --><input type="txt_registro" class="form-control" id="celular" maxlength="12" onkeyup="ValidateUSPhoneNumber(this.value)" required placeholder="Número Celular ej: +56981234567"></div><div class="form-group"><!--  <label  class="col-form-label">Número Fijo:</label> --><input type="txt_registro" class="form-control" id="fijo" placeholder="Número Teléfono Fijo ej: 2123456" onkeypress="ValidaFijo(this.value)" maxlength="9"></div><div class="form-group"><!-- <label  class="col-form-label">Fecha nacimiento:</label> --><input type="date" class="form-control" id="fecha_nacimiento" required placeholder="Fecha nacimiento" onblur="ValidaColor(this.id)" ></div><div class="form-group"><!-- <label  class="col-form-label">Direccion:</label> --><input type="txt_registro" class="form-control" id="direccion" required placeholder="Dirección" onblur="ValidaColor(this.id)"></div><div class="form-group"><!-- <label  class="col-form-label">Contraseña:</label> --><input type="password_registro" class="form-control" id="contrasena" required placeholder="Cree una Contraseña" onblur="ValidaColor(this.id)"></div><div class="form-group"><!-- <label  class="col-form-label">Confirme Contraseña:</label> --><input type="password_registro" class="form-control" id="confirma_contrasena" required placeholder="Confirme Contraseña" onblur="ValidaColor(this.id)"></div></form>');
      
    
  }



var Fn = {
	// Valida el rut con su cadena completa "XXXXXXXX-X"
	validaRut : function (rutCompleto) {
		rutCompleto = rutCompleto.replace("‐","-");
		if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
			return false;
		var tmp 	= rutCompleto.split('-');
		var digv	= tmp[1]; 
		var rut 	= tmp[0];
		if ( digv == 'K' ) digv = 'k' ;
		
		return (Fn.dv(rut) == digv );
	},
	dv : function(T){
		var M=0,S=1;
		for(;T;T=Math.floor(T/10))
			S=(S+T%10*(9-M++%6))%11;
		return S?S-1:'k';
	}
}





function ValidaColor(valor){
     var estado = true;
    if($('#'+valor).val() == ""){
        
        
       $('#'+valor).css('border-color', 'red');
        
       estado = false;
    }else {
        
        $('#'+valor).css('border-color', 'green');
        
        estado = true;
    }
}



function ValidaRut(valor){
    
     var estado = true;
    if(!Fn.validaRut(valor) ){
        
 $('#rut').css('border-color', 'red');
   
        
  document.getElementById('rut').addEventListener('input', function(evt) {
  let value = this.value.replace(/\./g, '').replace('-', '');
  
  if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
    value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1$2$3-$4');
  }
  else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
    value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, '$1$2$3-$4');
  }
  else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
    value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, '$1$2$3');
  }
  else if (value.match(/^(\d)(\d{0,2})$/)) {
    value = value.replace(/^(\d)(\d{0,2})$/, '$1$2');
  }
  this.value = value;
    
    
});
        
 estado = false;  
        
    }else {
        
        $('#rut').css('border-color', 'green');
        
        estado = true;
    }
    
    return estado;
    
}



function revisa_email(valor){
     var estado = true;
    
    var re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	if(!re.exec(valor)){
		$('#correo').css('border-color', 'red'); 
        estado = false;
	}
    else{
	    $('#correo').css('border-color', 'green'); 
         estado = true;
	}
    
    return estado;
}


    
function ValidateUSPhoneNumber(phoneNumber) {
    var estado = true;
     var regExp = /^(\+?56)?(\s?)(0?9)(\s?)[9876543]\d{7}$/;
     var phone = phoneNumber.match(regExp);
     if (!phone) {
       $('#celular').css('border-color', 'red'); 
         estado = false;
     }
    else{
       $('#celular').css('border-color', 'green'); 
        estado = true;
     }
    return estado;
}


function ValidaFijo(valor) {
    var estado = true;
     var regExp = /^[0-9]+$/;
     var phone = valor.match(regExp);
     if (!phone) {
       $('#fijo').css('border-color', 'red'); 
         estado = false;
     }
    else{
       $('#fijo').css('border-color', 'green'); 
        estado = true;
     }
    return estado;
}


function fecha_por_defecto(){
    
    $('#fecha_nacimiento').datepicker({
	dateFormat: 'yy-mm-dd',
    }).datepicker("setDate", new Date());
  
}

function validarRegistro(){
 var estado = true;
 
 if($('#nombres').val().length <= 1){estado = false; }
 if($('#paterno').val().length <= 1){estado = false;}
 if($('#materno').val().length <= 1){estado = false;}
 if($('#rut').val().length <= 1){estado = false; }
 if(!ValidaRut($('#rut').val())){estado = false;}
 if($('#correo').val().length <= 1){estado = false; }
 if(!revisa_email($('#correo').val())){ estado = false; }  
 if($('#confirma_correo').val().length <= 1){estado = false; }  
 if($('#celular').val().length <= 1){estado = false;}
 if(!ValidateUSPhoneNumber($('#celular').val())){estado = false;}
 if($('#fijo').val().length<= 1){estado = false; }
 if(!ValidaFijo($('#fijo').val())){estado = false;}
 if($('#fecha_nacimiento').val().length <= 1) {estado = false; }         
 if($('#direccion').val().length <= 1){estado = false; }
 if($('#contrasena').val().length <= 1){estado = false; }
 if($('#confirma_contrasena').val().length <= 1) {estado = false; }
 if(   ( $('#contrasena').val() != $('#confirma_contrasena').val() ) ){ estado = false; }
 if(   ( $('#correo').val() != $('#confirma_correo').val() ) ){ estado = false;}    
 return estado;    

    
}


function registroPaciente(){
    
    if(validarRegistro()){
        
        var parametros = {
               "nombres" : $('#nombres').val(),
               "paterno" : $('#paterno').val(),
               "materno" : $('#materno').val(),
               "rut" : $('#rut').val(),
               "correo" : $('#correo').val(),
               "confirma_correo" : $('#confirma_correo').val(),
               "celular": $('#celular').val(),
               "fijo" : $('#fijo').val(),
               "fecha_nacimiento" : $('#fecha_nacimiento').val(),
               "direccion" : $('#direccion').val(),
               "contrasena" : $('#contrasena').val(),
               "confirma_contrasena" : $('#confirma_contrasena').val()
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/guarda_paciente.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#procesa_registro").html("<div class='loaderboton' style='margin:0 auto;'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    if(response.resp){
                    
                        $("#modal_registro").modal('hide');
                            
                        $("#exito").modal('show');
                    
                        recargaForm()
                        
                        $("#procesa_registro").html('<button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>');
                        
                        
                          
                    } else{
                        
                    $("#fracaso").modal('show');
                    $("#datovacio").html("El formulario presenta datos invalidos o vacios");    
                        
                    $("#procesa_registro").html('<button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>');
                           
                    }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                   alert(response.resp);
                  
                   $("#error").modal('show');
                  
                   $("#procesa_registro").html('<button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>');
                }
               
        });
        
    }
    
      else{
        
                   $("#fracaso").modal('show');
          
                   $("#datovacio").html("El formulario presenta datos vacíos,incorrectos o datos de confirmación no coinciden.");
                        
                    $("#procesa_registro").html('<button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>');   
                   
        }
    
      
}


 

var options = {
  enableHighAccuracy: true,
  timeout: 10000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

     var long = document.getElementById('long');
     var lati = document.getElementById('lati');
    
    long.value=crd.longitude;
    lati.value= crd.latitude;
    
};

function error(err) {
            
    switch(err.code) {
            
         case err.PERMISSION_DENIED:
            // El usuario denegó el permiso para la Geolocalización.
            var long = document.getElementById('long');
            var lati = document.getElementById('lati');
            long.value= 0;
            lati.value= 0;
            $("#error_ubicacion").modal('show');
            $("#mesje_ubicacion").html("<p>Usted denegó los permisos de ubicación,por favor recargue la pàgina y permita el acceso en su navegador.</p><br><img src='assets/images/permisos_ubicacion.jpg'> ");      
            break;
        case err.POSITION_UNAVAILABLE:
            // La ubicación no está disponible.
            var long = document.getElementById('long');
            var lati = document.getElementById('lati');
            long.value= 0;
            lati.value= 0;
            $("#error_ubicacion").modal('show');
            $("#mesje_ubicacion").html("<p>Su ubicaciòn no esta disponible,revise las configuraciones de su navegador.</p>");  
            break;
        case err.TIMEOUT:
            // Se ha excedido el tiempo para obtener la ubicación.
            var long = document.getElementById('long');
            var lati = document.getElementById('lati');
            long.value= 0;
            lati.value= 0;
            $("#error_ubicacion").modal('show');
            $("#mesje_ubicacion").html("Se terminò el tiempo para otorgar permisos de ubicación,favor recargue la página y otrogue permisos.</p><br><img   src='assets/images/permisos_ubicacion.jpg'> ");  
            break;
        case err.UNKNOWN_ERROR:
            // Un error desconocido.
            var long = document.getElementById('long');
            var lati = document.getElementById('lati');
            long.value= 0;
            lati.value= 0;
            $("#error_ubicacion").modal('show');
            $("#mesje_ubicacion").html("Error desconocido con su ubicación.");  
            break;
         
            break;
    }
    
                
};

navigator.geolocation.getCurrentPosition(success, error, options);







