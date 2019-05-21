
<?php 
error_reporting(0);
session_start();

if(isset($_SESSION['usr'])){
  echo "<script> window.location= 'reporte.php' </script>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>

  <title>WhatJon's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/whatjons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#WhatJons">¿ WhatJon's ?</a></li>
        <li><a href="#Reportes">Reportes Destacados</a></li>
        <li><a href="#Login">Ingresar | Registrarse</a></li>
        <li><a href="#Contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <img src="img/portada.jpg" style="width: 100%; height: 300px;">
  <div class="titulo-p">
  <h1 style=" letter-spacing: 5.5px; background-color: #ddd; opacity: 0.5;">WhatJon's</h1> 
  <p style=" letter-spacing: 1.5px; background-color: #ddd; opacity: 0.6;"> Aquí podrás reportar diversas anomalias del Edo. de México</p> 
  </div>

</div>



<!-- Container (About Section) -->
<div id="WhatJons" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2 style=" letter-spacing: 2.5px;">¿Qué es WhatJon's?</h2><br>
      <h4>El Estado de Mexico pone a tu disposición diferentes medios para facilitar el reporte de servicios municipales.  </h4><br>
      <p>Es el nuevo servicio para todos los ciudadanos del estado de Mexico. Es una aplicación web para cualquier dispositivo con conexion a internet y un navegador, totalmente gratuito que funciona para reportar incidencias encontrados en vía publica, con la finialidad de hacer del conocimiento de la comunidad en generar las oportunidades de mejora</p>
      <br><button class="btn btn-default btn-lg" style="border: 1px solid #aaa;" onclick="reporte();">¡Crea tu reporte aqui!</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-qrcode logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-search logo slideanim"></span>
    </div>
    <div class="col-sm-6">
      <form>
    <div class="input-group">
      <select class="form-control">
        <option>Seleccione su municipio</option>
      </select>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Ver Reportes</button>
      </div>
    </div>
  </form>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICIOS</h2>
  <h4>Tipos de Reportes que los ciudadanos pueden realizar</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tint logo-small"></span>
      <h4>AGUA</h4>
      <p>Reportes sobre agua</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-flash logo-small"></span>
      <h4>LUZ</h4>
      <p>Reportes Fallas Electricas</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-deciduous logo-small"></span>
      <h4>AREAS VERDES</h4>
      <p>Reportes de daños a areas verdes</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>MEDIO AMBIENTE</h4>
      <p>Reortes daños al ambiente</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-road logo-small"></span>
      <h4>VIA PUBLICA</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-plus logo-small"></span>
      <h4 style="color:#303030;">Y MAS ... </h4>
      <p></p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="Reportes" class="container-fluid text-center bg-grey">
  <h2>Reportes de la Ciudadania del Estado de México</h2><br>
 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">

      <div class="contenedor">
        <img src="" style="width: 100%;" width="854" height="480">
        <div class="titulo" style="width: 80%; color: #000; letter-spacing: 1.5px;" >
          <p>
            <strong>
              Recolección de basura ya que el camión recolector tiene una semana aprox. que no pasa y ya existe bastante basura
            </strong>
          </p>
      </div>

    </div>        

      </div>
      <div class="item">


      <div class="contenedor">
        <img src="" style="width: 100%;" width="854" height="480">
        <div class="titulo" style="width: 80%; color: #000; letter-spacing: 1.5px;" >
          <p>
            <strong>
              Recolección de basura ya que el camión recolector tiene una semana aprox. que no pasa y ya existe bastante basura
            </strong>
          </p>
      </div>

    </div>

      </div>
      <div class="item">
        

      <div class="contenedor">
        <img src="" style="width: 100%;" width="854" height="480">
        <div class="titulo" style="width: 80%; color: #000; letter-spacing: 1.5px;" >
          <p>
            <strong>
              Recolección de basura ya que el camión recolector tiene una semana aprox. que no pasa y ya existe bastante basura
            </strong>
          </p>
      </div>

    </div>

      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="Login" class="container-fluid">
  


<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>


<center>
<div class="logueo">
  <form action="php/login.php" method="POST">
    <div class="row">
      <h2 style="text-align:center">Inicia sesión con Facebook o Twitter</h2>
      <div class="vl">
        <span class="vl-innertext"> O </span>
      </div>

      <div class="col">
        <a class="fb btn" onclick="" >
          <i class="fa fa-facebook fa-fw"></i> Iniciar con Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Iniciar con Twitter
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>O inicia sesión con tu cuenta</p>
           
        </div>

        <input type="text" name="usermail" placeholder="Correo electronico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="hidden" name="ingresar" value="2">
        <input type="submit" value="Iniciar Sesión" >
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container" > 
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn" id="myBtn">Registrate</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>

</center>



<div class="container">
 
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 20px;">
         <br>
          <h4><span class="glyphicon glyphicon-lock"></span> Registrar</h4>
        </div>
        <div class="modal-body" style="padding:30px 50px;">
          <form role="form" id='formRegistro' action="php/login.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Correo Electronico</label>
              <input type="email" class="form-control" id="usrmail" name="usrmail" placeholder="Ingresa tu correo electronico" required>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Ingresa tu nombre de usuario" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" id="usrpass" name="usrpass" placeholder="Ingrese su Contraseña" required>
            </div>
              <input type="hidden" name="registro" value="1">
              <button class="btn btn-success btn-block" > Registrarme</button>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal" id="cerrar"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
 



</div>

<!-- Container (Contact Section) -->
<div id="Contacto" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contáctenos y le responderemos dentro de las 24 horas</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> TOLUCA, MX</p>
      <p><span class="glyphicon glyphicon-phone"></span> +52 722 357 4529 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> tureporte@incidencias.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre y Apellido" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Correo Electronico" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->

<div id="status"></div>
<img id="foto" src="">

<center>
<div style="width: 80%; text-align: justify;">
  
  <p><strong>POLÍTICA DE PRIVACIDAD</strong></p
    ><p>&nbsp;</p><p>El presente Política de Privacidad establece los términos en que Whatjon's usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>

    <p><strong>Información que es recogida</strong></p>
    <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p>

    <p><strong>Uso de la información recogida</strong></p>
    <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p>
    <p>Whatjon's está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p>

    <p><strong>Cookies</strong></p>
    <p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p>
    <p>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente, <a href="https://recargalebara.es" target="_blank">visitas a una web </a>. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p>

    <p><strong>Enlaces a Terceros</strong></p>
    <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p>

    <p><strong>Control de su información personal</strong></p>
    <p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p>

    <p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><p>Whatjon's Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>

</div>
</center>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> WhatJon's - Derecho Reservados © 2019</p>
  <p id="politicas"><a href="">Politica de Privacidad</a></p>
</footer>


<div id="geolocation-test"></div>

<script type="text/javascript" src="js/whatjons.js"></script>
<!--<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>-->

</body>
</html>