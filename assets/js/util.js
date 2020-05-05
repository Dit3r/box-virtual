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

    

