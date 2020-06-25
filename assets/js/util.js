
 
var myVar =  setInterval(llamarBox, 10000);
    
    
function mostrarSalaDeEsepera( ){
        
 $("#modal_sala_espera").modal('show');
    
}


////modal salir///////////
function mostrarModalConfirmaSalir(){     
 $("#confirmar").modal('show');
}
////fin funcion muestra establecimientos ///////////

function confirmaSalir(){     
    location.reload();
    location.href='#about';  
    
}

////inicio funcion ajax que confirma y valida establecimiento ////

function llamarBox(){
    
    var host = "https://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=";
    var config = "&width=700&heigth=500";
    var urlOficial =  host+id+config;
    
      // var parametros = {
           
        //   "host": host+id+config
               // "host" : "https://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=",
               // "config" : "&width=700&heigth=500"
        //};
        
    
    $.ajax({
          url: "controller/llamada.php",
         // data: parametros,
          type: "get",
          dataType: "json",
              beforeSend: function () {
              $("#modal_loader").modal('show');
              $("#cargaloader").html("<div class='spinner1'></div> ");
                },
          success: function(response) { 
              
                if(response.status == 200) {
                    
                 $("#modal_loader").modal('hide');    
                      
                
                    
           // mostrarSalaDeEsepera();
                                              
            /*        
               $.ajax({
               data: {"dato" : response.status },
               url: "sala_espera.php",
               type: "post",
               success:  function (response) {
               }
               });    
               */
                    
                 //$('#cargacontenido').html('<center><iframe width="700" height="500"  src="'+response.data+'" allow="camera;microphone" frameborder="0" allowfullscreen ></iframe> </center>'); 
                    
                 var ventana = window.open('','video','height=500,width=700');       
                 ventana.document.write(response.data);
                 
                 //ventana.document.write($('#cargacontenido').innerHTML);
                 //ventana.document.close();
                 //ventana.focus(); 

      
                
               clearInterval(myVar);
  
              }else{
                   $("#fracaso").modal('show');
                   $("#datovacio").html(response.data);
              }
        
    },
          error: function(jqXHR, textStatus, error) { 
              
              $("#error").modal('show');
              $("#datovacioerror").html("Error en servidor.");
    
    }
        });
    
    
    
}







