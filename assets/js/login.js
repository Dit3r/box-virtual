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
    
  $('#bodyForm').html('<form id="formRegistro"><div class="form-group"><label for="recipient-name" class="col-form-label">Nombres:</label><input type="txt_registro" class="form-control" id="nombres" required></div><div class="form-group"><label class="col-form-label">Apellido Paterno:</label><input type="txt_registro" class="form-control" id="paterno" required></div> <div class="form-group"><label  class="col-form-label">Apellido Materno:</label><input type="txt_registro" class="form-control" id="materno" required></div><div class="form-group"><label  class="col-form-label">Rut/Dni: </label><input type="txt_registro" class="form-control" id="rut" required></div> <div class="form-group"><label  class="col-form-label">Correo:</label><input type="txt_registro" class="form-control" id="correo" required></div><div class="form-group"><label  class="col-form-label">Número Celular:</label><input type="txt_registro" class="form-control" id="celular" required></div> <div class="form-group"><label  class="col-form-label">Número Fijo:</label><input type="txt_registro" class="form-control" id="fijo"></div><div class="form-group"><label  class="col-form-label">Fecha nacimiento:</label><input type="date" class="form-control" id="fecha_nacimiento" required></div><div class="form-group"><label  class="col-form-label">Direccion:</label><input type="txt_registro" class="form-control" id="direccion" required></div><div class="form-group"><label  class="col-form-label">Contraseña:</label><input type="password_registro" class="form-control" id="contrasena" required></div><div class="form-group"><label  class="col-form-label">Confirme Contraseña:</label><input type="password_registro" class="form-control" id="confirma_contrasena" required></div> </form>');
    
  }


function validarRegistro(){
    
$resp = true;    
    
 if($('#nombres').val()==""){$resp = false;  }
 if($('#paterno').val()==""){$resp = false; }
 if($('#materno').val()==""){$resp = false; }
 if($('#rut').val()==""){$resp = false; }
 if($('#correo').val()==""){$resp = false; }
 if($('#celular').val()==""){$resp = false; }
 if($('#fijo').val()==""){$resp = false; }
 if($('#fecha_nacimiento').val()=="") {$resp = false; }         
 if($('#direccion').val()==""){$resp = false; }
 if($('#contrasena').val()==""){$resp = false; }
 if($('#confirma_contrasena').val()=="") {$resp = false; }
 if(   ( $('#contrasena').val() != $('#confirma_contrasena').val() ) ){ $resp = false; }
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





