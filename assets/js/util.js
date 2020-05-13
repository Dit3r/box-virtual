$(document).ready(function() {	
 
    setInterval(recargarLlamada, 10000);
});

///cargan las barra de navegacion

 function cargaBarraNavegacion(){
      $.post("php/barra_navegacion.php",function(data){
        $("#navbar-wd").html(data);
       
    });
     
 }


///fin carga barra navegacion /////////////

////funcion muestra establecimientos///////////
function mostrarEstablecimientos(){   
    cargaBarraNavegacion();
       /// Invocamos a nuestro script PHP
    $.post("php/establecimientos.php",function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#cargacontenido").html(data);
        cargaRegion();
        cargaSome();
        location.href="#cargacontenido";
    });
    
}
////fin funcion muestra establecimientos ///////////


////// inicio funcion muestra sala de espera //////
function mostrarSalaEspera(){  
    $("#cambiar").html("Sala de espera");
    $.post("php/sala_de_espera.php",function(data){
    $("#cargacontenido").html(data);
        location.href="#cargacontenido";
    }); 
    
}



////////////inicio funcion muestra box//////////////
function mostrarBox(){ 
     $("#cambiar").html("Box Virtual");
    $.post("php/box_virtual.php",function(data){
    $("#cargacontenido").html(data);
        location.href="#cargacontenido";
    });  
                   
    }

/////// fin funcion muestra box//////////


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


//////select sectores///7

function cargaSome () {

    $.getJSON("json/sectores.json", function(data) {
        //relleno la variable global con el json
        $.each(data, function(key, value) {

            var option =
                "<option value="+value.sector+">"+value.sector+"</option>";
                 
            $("#sector").append(option);

        }); // close each()
   
    }); // close getJSON()

};


//fin select sectores



////inicio funcion ajax que confirma y valida establecimiento ////

function confirma_establecimiento(){
        var parametros = {
                "region" : $('#region').val(),
               "comuna" : $('#comuna').val(),
               "establecimiento" : $('#establecimiento').val(),
                "sector" : $('#sector').val()
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
                       // alert(response.nombre);
                        $("#exito").modal('show');
                        mostrarSalaEspera();
                    } else{
                        $("#fracaso").modal('show');
                    }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                        $("#error").modal('show');
               
                }
               
        });
}




//////fin que valida motivo/////////

function validaDatosMedicos(){
    
    $("#datovacio").html("Complete todos los datos.");
    $("#div_boton_sala").html("<input id='enviar_motivo' onclick='confirma_datos_medicos()' class='btn btn-primary submit' value='Enviar' />");
    $("#motivo").val('').focus();
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
                       // alert(response.nombre);
                         mostrarBox();
                        $("#exito").modal('show');
                       
                    } else{ 
                          
                        $("#fracaso").modal('show');
                       
                        validaDatosMedicos();
                        
                    }
                        
                },
              error:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                        $("#error").modal('show');
               
                }
               
        });
}
