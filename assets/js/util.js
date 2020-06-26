
 
var myVar =  setInterval(llamarBox, 10000);
    
    
function mostrarSalaDeEsepera(){
        
 $("#modal_sala_espera").modal('show');
    
    
}


////modal salir///////////
function mostrarModalConfirmaSalir(){     
 $("#confirmar").modal('show');
}
////fin funcion confirma salir///////////

function confirmaSalir(){     
    location.reload();
    location.href= '#about';  
    
}

////inicio funcion ajax que confirma y valida establecimiento ////

function llamarBox(){
    
    //var host = "https://videoapsqa.boxvirtual.cl/apsvideoapi/meetings?id=";
    //var config = "&width=700&heigth=500";
    //var urlOficial =  host+id+config;
    
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
            //  $("#modal_loader").modal('show');
            //  $("#cargaloader").html("<div class='spinner1'></div> ");
                $("#loader").html("<div class='spinner1'></div> ");
                  
                },
          success: function(response) { 
              
              if(response.status == 200) {
                    
             // $("#modal_loader").modal('hide');    
             $("#loader").html("<h2>Box Virtual</h2> ");          
                              
              mostrarSalaDeEsepera();
                          
                // var ventana = window.open('','video','height=500,width=700');       
                //ventana.document.write(response.data);
                 
             var box= "BoxVirtual 1209f140-c423-461c-9aa8-2433900ab9b5";               
             var domain= "videoqa.boxvirtual.cl";
             var options={ 
             //roomName: response.data,
             roomName: response.data,  
             width: 750,
             height: 500,
             enableWelcomePage: false,
             p2p: { enabled: true,
             stunServers: [ { 
             urls: "stun:meet-jit-si-turnrelay.jitsi.net:443" } ],
             preferH264: true },
             parentNode: document.querySelector("#conf_div") } 
             var api= new JitsiMeetExternalAPI(domain,options);

             clearInterval(myVar);
  
              }
              
              else{
                  $("#loader").html("<h2>Box Virtual</h2> ");      
                  //$("#modal_loader").modal('hide');    
                  // $("#fracaso").modal('show');
                   //$("#datovacio").html(response.data);
              }
              
        
    },
          error: function(jqXHR, textStatus, error) { 
              $("#loader").html("<h2>Box Virtual</h2> ");   
              
              $("#error").modal('show');
              $("#datovacioerror").html("Error en servidor de la llamada.");
    
    }
        });
    
    
    
}







