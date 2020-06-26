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



function registroPaciente(){
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
                        
                        //window.location.href = "index.php";
                        
                        $('#username').focus();
                          
                    } else{
                        
                    $("#fracaso").modal('show');
                        
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





