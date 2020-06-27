////inicio funcion loguear ////

function login(){
        var parametros = {
               "username" : $('#username').val(),
               "password" : $('#password').val()
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
                    if(response.resp){
                   
                        window.location.href = "sala_espera.php";
                        
                    } else{
                        $("#fracaso").modal('show');
                        $('#username').focus();
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
    
  $('#bodyForm').html('<form id="formRegistro"><div class="form-group"><!--   <label for="recipient-name" class="col-form-label">Nombres:</label> --><input type="txt_registro" class="form-control" id="nombres" onblur="ValidaColor(this.id)" required placeholder="Nombres"></div><div class="form-group"><!--    <label class="col-form-label">Apellido Paterno:</label> --><input type="txt_registro" class="form-control" id="paterno" onblur="ValidaColor(this.id)" required placeholder="Apellido Paterno"></div><div class="form-group"><!-- <label  class="col-form-label">Apellido Materno:</label> --><input type="txt_registro" class="form-control" id="materno" onblur="ValidaColor(this.id)" required placeholder="Apellido Materno"></div><div class="form-group"><!--    <label  class="col-form-label">Rut/Dni: </label> --><input type="txt_registro" maxlength="10" class="form-control" id="rut" onchange="ValidaRut(this.value)" required placeholder="Rut: ej: 12345678-9"></div> <div class="form-group"><!--    <label  class="col-form-label">Correo:</label> --><input type="txt_registro" class="form-control" id="correo"  onblur="ValidaColor(this.id)" required placeholder="Correo/Email"></div><div class="form-group"><!--    <label  class="col-form-label">Confirmar correo:</label> --><input type="txt_registro" class="form-control" id="confirma_correo" onblur="ValidaColor(this.id)" required placeholder="Confirma Correo/Email"></div><div class="form-group"><!--  <label  class="col-form-label">Número Celular:</label> --><input type="txt_registro" class="form-control" id="celular" onblur="ValidaColor(this.id)" required placeholder="Número Celular"></div><div class="form-group"><!--     <label  class="col-form-label">Número Fijo:</label> --><input type="txt_registro" class="form-control" id="fijo" placeholder="Número Teléfono Fijo" onblur="ValidaColor(this.id)"></div><div class="form-group"><!--   <label  class="col-form-label">Fecha nacimiento:</label> --><input type="date" class="form-control" id="fecha_nacimiento" required placeholder="Fecha nacimiento" onblur="ValidaColor(this.id)"></div><div class="form-group"><!-- <label class="col-form-label">Direccion:</label>--><input type="txt_registro" class="form-control" id="direccion" required placeholder="Dirección" onblur="ValidaColor(this.id)"></div><div class="form-group"><!--<label  class="col-form-label">Contraseña:</label> --><input type="password_registro" class="form-control" id="contrasena" required placeholder="Cree una Contraseña" onblur="ValidaColor(this.id)"></div><div class="form-group"><!--<label  class="col-form-label">Confirme Contraseña:</label> --><input type="password_registro" class="form-control" id="confirma_contrasena" required placeholder="Confirme Contraseña" onblur="ValidaColor(this.id)"></div> </form>');
    
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
    if($('#'+valor).val() == ""){
        
       $('#'+valor).css('border-color', 'red');
    }else {
        
        $('#'+valor).css('border-color', 'green');
    }
}



function ValidaRut(valor){
    if(!Fn.validaRut(valor) ){
        
        $('#rut').focus();
       $('#rut').css('border-color', 'red');
    }else {
        
        $('#rut').css('border-color', 'green');
    }
    
}



function validarRegistro(){
    
$resp = true;    
    
 if($('#nombres').val()==""){$resp = false;  }
 if($('#paterno').val()==""){$resp = false; }
 if($('#materno').val()==""){$resp = false; }
 if($('#rut').val()==""){$resp = false; }
 if(!Fn.validaRut($('#rut').val())){$resp = false;}
 if($('#correo').val()==""){$resp = false; }
 if($('#confirma_correo').val()==""){$resp = false; }    
 if($('#celular').val()==""){$resp = false; }
 if($('#fijo').val()==""){$resp = false; }
 if($('#fecha_nacimiento').val()=="") {$resp = false; }         
 if($('#direccion').val()==""){$resp = false; }
 if($('#contrasena').val()==""){$resp = false; }
 if($('#confirma_contrasena').val()=="") {$resp = false; }
 if(   ( $('#contrasena').val() != $('#confirma_contrasena').val() ) ){ $resp = false; }
 if(   ( $('#correo').val() != $('#confirma_correo').val() ) ){ $resp = false; }    
 return $resp;    

    
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
          
                   $("#datovacio").html("El formulario presenta datos invalidos o vacios");
                        
                    $("#procesa_registro").html('<button type="button" class="form-control" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="registroPaciente()" class="btn btn-primary">Registrar</button>');  
        
                   
        }
    
      
}





