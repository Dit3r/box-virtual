!DOCTYPE html><html><head>
<meta charset="UTF-8">
<title>APS Box</title>
 <style>
 	body {
  		background-image: url('img/encuesta.jpg');
  		background-repeat: no-repeat;
			background-attachment: fixed;
  		background-size: 100% 100%;
		}
		
	
 </style> 
 <script type="text/javascript">
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(mostrarUbicacion);
		} else {alert("¡Error! Este navegador no soporta la Geolocalización.");}
	function mostrarUbicacion(position) {
	    var times = position.timestamp;
		var latitud = position.coords.latitude;
		var longitud = position.coords.longitude;
	    var altitud = position.coords.altitude;	
		var exactitud = position.coords.accuracy;	
		var div = document.getElementById("ubicacion");
		div.innerHTML = "Timestamp: " + times + "<br>Latitud: " + latitud + "<br>Longitud: " + longitud + "<br>Altura en metros: " + altitud + "<br>Exactitud: " + exactitud;}	
	function refrescarUbicacion() {	
		navigator.geolocation.watchPosition(mostrarUbicacion);}	
</script>

<script type="text/javascript">
	var x=document.getElementById("demo");
	function cargarmap(){
	navigator.geolocation.getCurrentPosition(showPosition,showError);
	function showPosition(position)
	  {
	  lat=position.coords.latitude;
	  lon=position.coords.longitude;
	  latlon=new google.maps.LatLng(lat, lon)
	  mapholder=document.getElementById('mapholder')
	  mapholder.style.height='250px';
	  mapholder.style.width='500px';
	  var myOptions={
	  center:latlon,zoom:10,
	  mapTypeId:google.maps.MapTypeId.ROADMAP,
	  mapTypeControl:false,
	  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	  };
	  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
	  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
	  }
	function showError(error)
	  {
	  switch(error.code) 
	    {
	    case error.PERMISSION_DENIED:
	      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
	      break;
	    case error.POSITION_UNAVAILABLE:
	      x.innerHTML="La información de la localización no esta disponible."
	      break;
	    case error.TIMEOUT:
	      x.innerHTML="El tiempo de petición ha expirado."
	      break;
	    case error.UNKNOWN_ERROR:
	      x.innerHTML="Ha ocurrido un error desconocido."
	      break;
	    }
	  }}
</script>   


</head>
	<body>
	 	<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
	   <br>
	 	<div class="container"> 
		 	<form class="bg-light p-5 contact-form" th:action="${base_path} + @{'close'}" method="post">
			 	
			 	<div >
			 		<label>Rut: </label>
			 		<input type="text" placeholder="Rut (127652340)" name="rut">
			 	</div>
			 	<br>
			 	<div>
			 		<label>Estado de Salud</label>
			 		<select >
					    <option th:value="0" th:text="Bueno"></option>
					    <option th:value="1" th:text="Regular"></option>
					    <option th:value="2" th:text="Malo"></option>
					</select>
				</div>
				<br>
				<div>
			 		<label>Presenta Tos?</label>
			 		<input type="checkbox" name="tos"/>
			 	</div>
			 	<br>
			 	<div>
			 		<label>Presenta Algún Otro Síntoma</label>
			 		<input type="text" placeholder="Dolor de cabeza agudo" name="sintoma"/>
			 	</div>
			 	<div class="form-group">
	                <input type="submit" value="Enviar" class="btn btn-secondary py-3 px-5">
	              </div>
			</form>
	   </div> 
	   
	   <div id='ubicacion'></div>
	 
	 	<div id="demo"></div>
		<div id="mapholder"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<button onclick="cargarmap()">Cargar mapa</button>
	</body>
</html>