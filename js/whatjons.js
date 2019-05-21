
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});

  (function(){
  var content = document.getElementById("geolocation-test");

  if (navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(function(objPosition)
    {
      var lon = objPosition.coords.longitude;
      var lat = objPosition.coords.latitude;

      //content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";

    }, function(objPositionError)
    {
      switch (objPositionError.code)
      {
        case objPositionError.PERMISSION_DENIED:
          content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
        break;
        case objPositionError.POSITION_UNAVAILABLE:
          content.innerHTML = "No se ha podido acceder a la información de su posición.";
        break;
        case objPositionError.TIMEOUT:
          content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
        break;
        default:
          content.innerHTML = "Error desconocido.";
      }
    }, {
      maximumAge: 75000,
      timeout: 15000
    });
  }
  else
  {
    content.innerHTML = "Su navegador no soporta la API de geolocalización.";
  }
})();

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


/** 
* Facebook scripts
* @author Bryant JZ
*
*/

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '415656892572208',
      cookie     : true,
      xfbml      : true,
      version    : '3.3'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});


{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}