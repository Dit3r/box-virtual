$(document).ready(function() {	
 
    setInterval(recargarLlamada, 10000);
});

///cargan las barras de navegacion

 function cargaBarraEstabelcimientos(){
      $.post("php/barra_establecimientos.php",function(data){
    $("#navbar-wd").html(data);
       
    });
     
 }

function cargaBarraSalaEspera(){
      $.post("php/barra_sala_espera.php",function(data){
    $("#navbar-wd").html(data);
       
    });
     
 }

function cargaBarraBoxVirtual(){
      $.post("php/barra_box_virtual.php",function(data){
    $("#navbar-wd").html(data);
       
    });
     
 }

///fin carga barras navegacion /////////////

////funcion muestra establecimientos///////////
function mostrarEstablecimientos(){  
    $("#navbar-wd").html("");
    cargaBarraEstabelcimientos();  
       /// Invocamos a nuestro script PHP
    $.post("php/establecimientos.php",function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#cargacontenido").html(data);
        cargaRegion();
        cargaSome();
    });
    
    $("#cargacontenido").html("");
    
    location.href="#cargacontenido";
}
////fin funcion muestra establecimientos ///////////


////// inicio funcion muestra sala de espera //////
function mostrarSalaEspera(){  
    
     $("#navbar-wd").html("");
      cargaBarraSalaEspera();
    $("#cargacontenido").html("");
    
       /// Invocamos a nuestro script PHP
    $.post("php/sala_de_espera.php",function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#cargacontenido").html(data);
        
    }); 
    
     
       location.href="#cargacontenido";
 
}

//////fin funcion muestra sala de espera/////////

////////////inicio funcion muestra box//////////////
function mostrarBox(){
    
    
  if ($('#motivo').val().trim() === '') {
      
     alert('Debe indicar el motivo');
     location.href="#cargacontenido";
      
     $("#motivo").val('').focus();

    } else {
             $("#navbar-wd").html("");
             cargaBarraBoxVirtual();  
        $("#cargacontenido").html("");
        
       /// Invocamos a nuestro script PHP
    $.post("php/box_virtual.php",function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#cargacontenido").html(data);
    });  
                 
          location.href="#cargacontenido";
        }
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
