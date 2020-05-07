function recargar(){   
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("controller/carga-div-video.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#llamada").html(data);
    });        
}



function irBox(){
    
  if ($('#motivo').val().trim() === '') {
     alert('Debe indicar el motivo');
     location.href="#sala_espera";
     $("#motivo").val('').focus();

    } else {
                   location.href="#box_virtual";
               }
            }




//select establecimientos

$(document).ready(function () {

    $.getJSON("regiones.json", function(data) {
        //relleno la variable global con el json
      
        $.each(data, function(key, value) {

            var option =
                "<option value="+value.region+">"+value.region+"</option>";
                 
            $("#region").append(option);

        }); // close each()
        
        cambiaComuna();
        
    }); // close getJSON()
    
    
});


//inico cambia comuna
function cambiaComuna(){

  var valorInputReg=  $("#region").val();
    $("#comuna").empty();
    $("#establecimiento").empty();
    $.getJSON("comunas_regiones.json", function(data) {
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
    $.getJSON("establecimientos.json", function(data) {
    //uso la variable global para no llamar 2 veces la api
       
        $.each(data, function(key, value) {

            if(valorInputCom == value.comuna) {
            
                 var option =
                "<option value="+value.establecimiento+">"+value.establecimiento+"</option>";
                
            $("#establecimiento").append(option);
                
            }

        }); // close each()
    }); // close getJSON()
}





//fin select establecimientos


//select sectores

$(document).ready(function () {

    $.getJSON("sectores.json", function(data) {
        //relleno la variable global con el json
        $.each(data, function(key, value) {

            var option =
                "<option value="+value.sector+">"+value.sector+"</option>";
                 
            $("#sector").append(option);

        }); // close each()
   
    }); // close getJSON()

});


//fin select sectores