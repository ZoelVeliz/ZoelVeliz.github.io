<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Contacto | Industrias Velcar Inc.</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">




</head>
  <!--
oncontextmenu = Click derecho.
onselectstart = Seleccionar.
ondragstart = Arrastrar
-->
<body onKeyDown="checkKey(event)" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  <div id="preloader"></div>

<!--==========================
Header Section
============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/Velcar.png" alt="Velcar" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php" style="font-size: 18px;">Inicio</a></li>

          <li class="menu-has-children"><a href="nosotros.php" style="font-size: 18px;">Nosotros</a>
            <ul>
              <li><a href="nosotros.php" style="font-size: 16px;">Nuestra empresa</a></li>
              <li class="menu-has-children"><a href="SubirCurriculum.php" style="font-size: 16px;">Unete al Equipo</a></li>
            </ul>
          </li>


            <!--<ul>
              <li><a href="#Montaje" style="font-size: 16px;">Montaje</a></li>
              <li class="menu-has-children"><a href="#Instalacion" style="font-size: 16px;">Instalación</a>
                <ul>
                  <li><a href="#Instalacion" style="font-size: 16px;">Luminarias</a></li>
                </ul>
              </li>
              <li><a href="#Mantenimiento" style="font-size: 16px;">Mantenimiento</a></li>
            </ul>-->
          </li>
          <li><a href="index.php #portfolio" style="font-size: 18px;">Proyectos</a></li>
          <li><a href="contacto.php" style="font-size: 18px;">Contacto</a></li>
          <li><a href="academia3/index.php" style="font-size: 18px;">Iniciar Sesión</a></li>
           <li><a href="academia3/fregistro.php" style="font-size: 18px;">Registrarse</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!--==========================
Login
============================-->
<!-- modal de inicio de sesión -->
<div id="Modal1" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
  <div class="modal-content">

  <div class="modal-header">
    <h2>Iniciar sesión</h2>
  </div>

  <div class="modal-body">
    <form action="" method="post" enctype="application/x-www-form-urlencoded" id="FormLogin">

      <div class="form-group">
        <label for="control1_nombre">Email</label>
        <input type="email" onkeypress="return email(event)" class="form-control" name="Email2" id="Email2" placeholder="Email" data-rule="email" data-msg="Introduzca un email válido" maxlength="35" required autofocus/>
      </div>

      <div class="form-group">
        <label for="control1_contraseña">Contraseña</label>
        <input type="password" class="form-control" name="Password2" id="Password2" placeholder="Contraseña" data-msg="Introduzca su contraseña" maxlength="20" required/>
      </div>

      <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>

    </form>
  </div>
  </div>
  </div>
</div>
<!--modal para registrarse-->
<div id="Modal2" class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
  <div class="modal-content">

  <div class="modal-header">
    <h2>Regístrate</h2>
  </div>

  <div class="modal-body">
    <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">

      <div class="form-group">
        <label for="control2_nombre">Nombre</label>
        <input type="text" onkeypress="return sololetras(event)" class="form-control" name="Nombre1" id="Nombre1" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres." maxlength="20" required autofocus/>
      </div>

      <div class="form-group">
        <label for="control2_nombre">Apellido</label>
        <input type="text" onkeypress="return sololetras(event)" class="form-control" name="Apellido1" id="Apellido1" placeholder="Apellido" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres." maxlength="20" required/>
      </div>

      <div class="form-group">
        <label for="control2_nombre">Email</label>
        <input type="email" onkeypress="return email(event)" class="form-control" name="Email1" id="Email1" placeholder="Email" data-rule="email" data-msg="Introduzca un email válido" maxlength="35" required/>
      </div>

      <div class="form-group">
        <label for="control2_nombre">Telefono</label>
        <input type="text" onkeypress="return telefono(event)" class="form-control" name="Telefono1" id="Telefono1" placeholder="Teléfono" data-rule="minlen:8" data-msg="Ingrese al menos 8 caracteres" maxlength="14" required/>
      </div>

      <div class="form-group">
        <label for="control2_contraseña">Contraseña</label>
        <input type="password" class="form-control" name="Password1" id="Password1" placeholder="Contraseña" data-msg="Introduzca su contraseña" maxlength="20" required/>
      </div>

      <button type="submit" class="btn btn-success btn-block">Registrar</button>
    </form>
  </div>
</div>
</div>
</div>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contáctenos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description" style="font-size: 20px;">Estamos a tu servicio. ¡Envianos tus dudas o problemas!.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Km 44.5 Ruta al atlántico,<br>Entrada a Cementos Progreso, <br>  Aldea Sinaca, Sanarate, <br> El progreso. </p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>Dvelizgerencia@industrias <br>velcar.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+502 5016-5812</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!</div>
            <div id="errormessage"></div>
            <form method="post" action="envio.php">

              <div class="form-group">
                <input type="text" onkeypress="return sololetras(event)" class="form-control" name="nombre" id="Nombre0" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres." maxlength="20" required autofocus/>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="email" onkeypress="return email(event)" class="form-control" name="Email0" id="Email0" placeholder="Email" data-rule="email" data-msg="Introduzca un email válido" maxlength="35" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="Asunto" id="Asunto0" placeholder="asunto" data-rule="minlen:4" data-msg="Ingrese al menos 8 caracteres" maxlength="20" required/>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="mensaje" id="Mensaje0" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje" style="max-width: 100%; min-width: 100%; max-height:200px; min-height:200px;" maxlength="800" required></textarea>
                <div class="validation"></div>
              </div>

            <input type="Submit" value="Enviar">
            </form>
          </div>
        </div>

      </div>
    </div>



    <br><br>
    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123435.87886416673!2d-90.29797383784901!3d14.804409831763813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589ed14855a745b%3A0xfcafce623b90bdc6!2sCementos+Progreso!5e0!3m2!1ses-419!2sgt!4v1526187671928" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </center>
  </section>


  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Industrias Velcar Inc.</strong> | Todos los derechos reservados.
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->

            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <script src="js/extra.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
