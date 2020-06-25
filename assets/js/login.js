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
                        $("#procesa_login").html("<div class='loaderboton'></div> ");
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
