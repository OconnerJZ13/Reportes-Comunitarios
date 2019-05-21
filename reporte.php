<?php 

session_start();

require_once('php/arc.inc');

if(!isset($_SESSION['usr'])){
  echo "<script> window.location= 'index.php' </script>";
}

$usr = $_SESSION['usr']; 
$pwd = $_SESSION['pwd']; 

arc();

$dat = dato($usr, $pwd);

?>
<html>
<title> <?php echo $dat[4]; ?> ¡Haz tu Reporte!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>
<link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
body {
        margin: 0;
        padding: 0;
    }
    #map {
      
        width: 100%;
        height: 350px;
    }

    #ev_Texto{
      margin-top: 3px;
      resize: none;
      border-radius: 5px;
    }

    input[type='file']{
      padding: 8px;
      letter-spacing: 1px;

    }
    input[type='file']:hover{
      cursor: pointer;
    }

    select{
      width: 95%;
      padding: 8px;
      border-radius: 3px;
      letter-spacing: 2.5px;
    }
    button{
      width: 94%;
      padding: 7px;
      border: 1px solid #D53131;
      border-radius: 3px;
      background-color: #FFF;
      letter-spacing: 3px;

    }

     button:hover{
      cursor: pointer;
      background-color: #D53131;
    }
</style>
<body class="w3-theme-l5">

<?php 


 ?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Inicio</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>

  <a href="php/login.php?exit=0" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="perfil">
    Salir
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large"><?php echo $dat[4]; ?></a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Mi Perfil - WhatJon's</h4>
         <p class="w3-center"><img src="<?php echo $dat[5]; ?>" class="w3-circle" style="height:156px;width:156px" alt="Avatar">
          <input type="file" name="foto"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $dat[4]." ".$dat[3]; ?> </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>  </p>
        </div>
      </div>
      <br>
      

  
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Publicar Reporte - Selecciona la Zona</h6>
               <div id='map'></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>Bryant</h4><br>
        <hr class="w3-clear">
        <p>  Recolección de basura ya que el camión recolector tiene una semana aprox. que no pasa y ya existe bastante basura.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half" >
              <img src="bas1.jpeg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            
        </div>
        
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="bas2.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Lazaro</h4><br>
        <hr class="w3-clear">
        <p> Recolección de basura ya que el camión recolector tiene una semana aprox. que no pasa y ya existe bastante basura</p>
       
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 
      </div>  

    
      
   
    </div>
    
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h6>WhatJon's - Derecho Reservados © 2019 </h6>
</footer>

 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


<script type="text/javascript">


  (function(){
   
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(function(objPosition)
        {
            var lon = objPosition.coords.longitude;
            var lat = objPosition.coords.latitude;

             var map = L.map('map').setView([lat, lon], 18);

// Capas base
            var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap<\/a> contributors'
                          }).addTo(map);


            var popup = L.popup();

            var mark = L.icon({
    iconUrl: 'img/market.png',

    iconSize:     [38, 45], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

var marker={};

function onMapClick(e) {

  if(marker != undefined){
    map.removeLayer(marker);
  }

  marker = new L.Marker(e.latlng, {draggable:true});
    map.addLayer(marker);
    marker.bindPopup("<div style='letter-spacing: 1px;'>Quiero reportar que </div> <select id='incidencia'><option>Elija una opcion... </option></select> <textarea rows='6' cols='44' id='ev_Texto' form='usrform'> </textarea> Evidencia <input type='file' id='ev_Archivo'> <button onclick='reportar()'> ¡Reportar! </button>").openPopup();
   
}

map.on('click', onMapClick);
          
        }, function(objPositionError)
        {
            switch (objPositionError.code)
            {
                case objPositionError.PERMISSION_DENIED:
                    alert("No se ha permitido el acceso a la posición del usuario.");
                break;
                case objPositionError.POSITION_UNAVAILABLE:
                    alert("No se ha podido acceder a la información de su posición.");
                break;
                case objPositionError.TIMEOUT:
                    alert("El servicio ha tardado demasiado tiempo en responder.");
                break;
                default:
                    alert("Error desconocido.");
            }
        }, {
            maximumAge: 75000,
            timeout: 15000
        });
    }
    else
    {
        alert("Su navegador no soporta la API de geolocalización.");
    }
})();

function reportar(){
  var incidencia= document.getElementById('incidencia').value;
  var txt= document.getElementById('ev_Texto').value;
  var long= navigator.geolocation.getCurrentPosition.coords.longitude;
  var lati= navigator.geolocation.getCurrentPosition.coords.latitude;

  alert(long +" | "+ lati);
}


  </script>

</body>
</html> 
