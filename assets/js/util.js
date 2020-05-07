           


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



function mostrarEstablecimientos(){   
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("php/establecimientos.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#establecimientos").html(data);
        cargaRegion();
        cargaSome();
    });
    
    $("#sala_espera").html("");
    $("#box_virtual").html("");
    
    $("#navbar-wd").html("");
    cargaBarraEstabelcimientos();
    
    location.href="#establecimientos";
}




function mostrarSalaEspera(){   
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("php/sala_de_espera.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#sala_espera").html(data);
        
    }); 
    
     $("#establecimientos").html("");
    
     $("#navbar-wd").html("");
      cargaBarraSalaEspera();
    
       location.href="#sala_espera";
 
    
}





function mostrarBox(){
    
  if ($('#motivo').val().trim() === '') {
     alert('Debe indicar el motivo');
     location.href="#sala_espera";
     $("#motivo").val('').focus();

    } else {
        
                      /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("php/box_virtual.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#box_virtual").html(data);
    });  
                 $("#sala_espera").html("");
        
                $("#navbar-wd").html("");
                  cargaBarraBoxVirtual();
        
                 location.href="#box_virtual";
               }
            }


function recargarLlamada(){   
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("php/carga-div-video.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
        
        $("#llamada").html(data);
        
    });        
}




//select establecimientos

function cargaRegion () {

    $.getJSON("json/regiones.json", function(data) {
        //relleno la variable global con el json
      
        $.each(data, function(key, value) {

            var option =
                "<option value="+value.region+">"+value.region+"</option>";
                 
            $("#region").append(option);

        }); // close each()
        
        cambiaComuna();
        
    }); // close getJSON()
    
    
};


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
                "<option value="+value.comuna+">"+value.comuna+"</option>";
                
            $("#comuna").append(option);
                
            }

        }); // close each()
        
        cambiaEstablecimiento();
    }); // close getJSON()
}

//inicio cambia estavblecimiento

function cambiaEstablecimiento(){

  var valorInputCom=  $("#comuna").val();
    $("#establecimiento").empty();
    $.getJSON("json/establecimientos.json", function(data) {
    //uso la variable global para no llamar 2 veces la api
       
        $.each(data, function(key, value) {

            if(valorInputCom == value.comuna) {
            
                 var option =
                "<option value="+value.establecimiento+">"+value.establecimiento+" ,"+value.direccion+"</option>";
                
            $("#establecimiento").append(option);
                
                
            }

        }); // close each()
    }); // close getJSON()
}





//fin select establecimientos


//select sectores

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