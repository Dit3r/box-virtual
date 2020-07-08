
 
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
              
             // alert(response.resp);
              
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
                  $("#loader").html("<h2>Sala de espera</h2>");      
                  //$("#modal_loader").modal('hide');    
                  // $("#fracaso").modal('show');
                   //$("#datovacio").html(response.data);
              }
              
        
    },
          error: function(jqXHR, textStatus, error) { 
              $("#loader").html("<h2>Sala de espera</h2>");   
              
              $("#error").modal('show');
              $("#datovacioerror").html("Error en servidor de la llamada.");
    
    }
        });
    
    
    
}



 
function iraindex(){
    
  window.location.href = "index.php";
    
}
 




var map;
 var infowindow; 
var myLatlng;

 function initMap()
 {
 // Creamos un mapa con las coordenadas actuales
   navigator.geolocation.getCurrentPosition(function(pos) {

   lat = pos.coords.latitude;
   lon = pos.coords.longitude;

    myLatlng = new google.maps.LatLng(lat, lon);

   var mapOptions = {
    center: myLatlng,
    zoom: 15,
   // navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: true
    
   };

   map = new google.maps.Map(document.getElementById("mapa"),  mapOptions);

   // Creamos el infowindow
   infowindow = new google.maps.InfoWindow();
       
       
    
   // Especificamos la localización, el radio y el tipo de lugares que queremos obtener
   var request = {
     location: myLatlng,
     radius: 3000,
     types: ['hospital'] 
   };

   // Creamos el servicio PlaceService y enviamos la petición.
   var service = new google.maps.places.PlacesService(map);
       
   
   service.nearbySearch(request, function(results, status) {
     if (status === google.maps.places.PlacesServiceStatus.OK) {
       for (var i = 0; i < results.length; i++) {
         crearMarcador(results[i]);
       }
     }
   });
 });
}


 function crearMarcador(place)
 {
 
  //creamos icono del marcador
  var image = new google.maps.MarkerImage(
  place.icon, new google.maps.Size(71, 71),
  new google.maps.Point(0, 0), new google.maps.Point(17, 34),
  new google.maps.Size(25, 25));
     
   // Creamos un marcador
   var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon : image ,
    //draggable: true,
    animation: google.maps.Animation.DROP,
    cursor: 'default'
   });

     
 // Asignamos el evento click del marcador
   google.maps.event.addListener(marker,'click', function() {
     infowindow.setContent(place.name);
     infowindow.open(map, this);
   });
     
     
     
      //creamos icono del marcador 2
  var image2 = new google.maps.MarkerImage(
  myLatlng.icon, new google.maps.Size(71, 71),
  new google.maps.Point(0, 0), new google.maps.Point(17, 34),
  new google.maps.Size(25, 25));
     
 
   // Creamos un marcador 2
   var marker2 = new google.maps.Marker({
    map: map,
    position: myLatlng,  
    //icon : image2 ,
    animation: google.maps.Animation.DROP,
    cursor: 'default',
    title : "Mi Ubicación"
   });

     
 // Asignamos el evento click del marcador 2
   google.maps.event.addListener(marker2,'click', function() {
     infowindow.setContent("Mi ubicación");
     infowindow.open(map, this);
   });
     
       
   }













