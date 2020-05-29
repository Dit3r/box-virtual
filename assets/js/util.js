$(document).ready(function() {	
 
    setInterval(recargarLlamada, 10000);
});


////funcion muestra establecimientos///////////
function mostrarModalEstablecimiento(){   
 $("#modal_establecimientos").modal('show');
     cargaRegion();
}

////fin funcion muestra establecimientos ///////////

////funcion muestra establecimientos///////////
function mostrarModalSome(){  
 $("#modal_some").modal('show');
}
////fin funcion muestra establecimientos ///////////


////funcion muestra establecimientos///////////
function mostrarModalSalaespera(){     
 $("#modal_sala_espera").modal('show');
}
////fin funcion muestra establecimientos ///////////




////funcion que recarga el div de la llamada ///////
function recargarLlamada(){   
   
       /// Invocamos a nuestro script PHP
    $.post("php/carga-div-video.php",function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
        
        $("#llamada").html(data);
      
        
    });        
}
///////////fin funcion que recarga div llamada//////////



///////inicio select cambia region 

function cargaRegion () {

    $.getJSON("json/regiones.json", function(data) {
        //relleno la variable global con el json
      
        $.each(data, function(key, value) {

            var option =
                "<option value='"+value.region+"'>"+value.region+"</option>";
                 
            $("#region").append(option);

        }); // close each()
        
        cambiaComuna();
        
    }); // close getJSON()
    
    
};

/////////

//inico cambia comuna
function cambiaComuna(){

  var valorInputReg=  $("#region").val();
    $("#comuna").empty();
    $("#establecimiento").empty();
    $.getJSON("json/comunas_regiones.json", function(data) {
    //uso la variable global para no llamar 2 veces la api
       
        $.each(data, function(key, value) {

            if(valorInputReg == value.region) {
            
                 var option =
                "<option value='"+value.comuna+"'>"+value.comuna+"</option>";
                
            $("#comuna").append(option);
                
            }

        }); // close each()
        
        cambiaEstablecimiento();
    }); // close getJSON()
}
////

/////inicio cambia estavblecimiento

function cambiaEstablecimiento(){

  var valorInputCom=  $("#comuna").val();
    $("#establecimiento").empty();
    $.getJSON("json/establecimientos.json", function(data) {
    //uso la variable global para no llamar 2 veces la api
       
        $.each(data, function(key, value) {

            if(valorInputCom == value.comuna) {
            
                 var option =
            "<option value='"+value.establecimiento+"'>"+value.establecimiento+" ,"+value.direccion+"</option>";
                
            $("#establecimiento").append(option);
                
                
            }

        }); // close each()
    }); // close getJSON()
}

//fin select establecimientos////




//fin select sectores



////inicio funcion ajax que confirma y valida establecimiento ////

function confirma_establecimiento(){
        var parametros = {
                "region" : $('#region').val(),
               "comuna" : $('#comuna').val(),
               "establecimiento" : $('#establecimiento').val(),
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/enviar_establecimiento.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#div_boton_est").html("<div class='loaderboton'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    if(response.resp){
                    $("#modal_establecimientos").modal('hide');     
                    $('#paso1').html("<button disabled class='btn btn-success'  >Hecho ✓</button>");    
                    $('#label_establecimiento').html("<p class='bg-info text-white' >"+response.establecimiento+"</p>"); 
                    $('#paso2').html("<button onclick='mostrarModalSome()' class='btn btn-primary submit' >Sector some ⮕</button>");
                    location.href='#div_paso2';  
                    $('#label_some').html("<p class='text-primary'>Paso 2. Seleccione su sector SOME.</p>");
                          mostrarModalSome();
                    } else{
                        $("#fracaso").modal('show');
                         $('#paso1').html("<button onclick='mostrarModalEstablecimiento()' class='btn btn-primary submit'  >Comenzar ⮕</button>"); 
                    }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                        $("#error").modal('show');
                }
               
        });
}



////inicio funcion ajax que confirma y valida SOME ////

function confirma_some(){
        var parametros = {
                "sector" : $('input:radio[name=sector]:checked').val(),
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/enviar_sector.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#div_boton_some").html("<div class='loaderboton'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    if(response.resp){
                    $("#modal_some").modal('hide');     
                    $('#paso2').html("<button disabled class='btn btn-success'  >Hecho ✓</button>");  
                    switch (response.sector) {
                     case 'rojo':
                     $('#label_some').html("<p class='bg-danger text-white'>Sector Rojo</p> "); 
                     break;
                     case 'verde':
                     $('#label_some').html("<p class='bg-success text-white'>Sector Verde</p> "); 
                     break;
                     case 'amarillo':
                     $('#label_some').html("<p class='bg-warning text-white'>Sector Amarillo</p> "); 
                     break;
                     case 'azul':
                     $('#label_some').html("<p class='bg-primary text-white'>Sector Azul</p> "); 
                     break;
                     default:
                      $('#label_some').html("<p class='bg-secondary text-white'>Sin Sector</p> "); 
                      }  
                    $('#paso3').html("<button onclick='mostrarModalSalaespera()' class='btn btn-primary submit' >Sala de espera ⮕</button>");
                    $('#label_sala_espera').html("<p class='text-primary'>Paso 3 . Sala de espera de Atención Medica.</p>");
                    location.href='#div_paso3';  
                          mostrarModalSalaespera();
                    } 
                    else{
                        $("#fracaso").modal('show');
                        $('#paso2').html("<button onclick='mostrarModalSome()' class='btn btn-primary submit' >Sector some ⮕</button>"); 
                    }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                        $("#error").modal('show');
                }
               
        });
}




////inicio funcion ajax que envia form datos medicos ////

function confirma_datos_medicos(){
        var parametros = {
               "enfermedad" : $('#enfermedad').val(),
               "alergico" : $('#alergico').val(),
               "medicamento" : $('#medicamento').val(),
               "motivo" : $('#motivo').val()
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/enviar_datos_medicos.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#div_boton_sala").html("<div class='loaderboton'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    if(response.resp){
                        $("#exito").modal('show');
                         $("#datosmedicos").slideUp();
                    } else{ 
                        $("#fracaso").modal('show');
                        $("#datovacio").html("Complete todos los datos.");
                        $("#div_boton_sala").html("<button class='btn btn-secondary' type='button' data-toggle='collapse' data-target='#datosmedicos' aria-expanded='false' aria-controls='collapseExample' >Ocultar ▲</button> <button id='enviar_motivo' type='button' class='btn btn-primary' onclick='confirma_datos_medicos()' >Enviar </button> ");
                        $("#motivo").val('').focus();
                    }
                        
                },
              error:  function (response) { 
                        $("#error").modal('show');
               
                }
               
        });
}


/////mandar url//////
////inicio funcion ajax que confirma y valida establecimiento ////

function mostarModalBox(){
    
        var parametros = {
                "host" : "https://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=",
                "config" : "&width=700&heigth=500"
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'controller/enviar_url_llamada.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#llamada").html("<div class='spinner1'></div> ");
                },
                dataType: "json",
                success:  function (response) {
                    //una vez que el archivo recibe el request lo procesa y lo devuelve en json que se parsea
                    if(response.resp){
                    $("#cambiar").html("Box Virtual");
                    $('#label_sala_espera').html("<p class='bg-info text-white' >Sala de espera Revisada</p>");     
                    $('#paso3').html("<button disabled class='btn btn-success'  >Hecho ✓</button>");
                    $('#label_box').html("<p class='bg-success text-white' >En llamada</p>");    
                    $('#paso4').html("<button onclick='mostrarModalSalaespera()' class='btn btn-primary submit' >Box Virtual</button>");    
                 $('#cargacontenido').html('<center><iframe width="700" height="500"  src="'+response.url+'" allow="camera;microphone" frameborder="0" allowfullscreen ></iframe> </center>');
                    location.href='#div_paso4';  
                  //window.open(response.url,$('#cargacontenido').target, 'width=700px,height=500px');
                
                    } else{
                        $("#fracaso").modal('show');
                   
                    }
                        
                },
              error:  function (response) { 
                    
                        $("#error").modal('show');
                }
               
        });
}



