<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Servicios | Industrias Velcar Inc.</title>
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
  <link rel="stylesheet" href="css/main3.css" />

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->


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

          <li class="menu-has-children"><a href="servicios.php" style="font-size: 18px;">Servicios</a>
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
        
          <li><a href="academia3/index.php" style="font-size: 18px;">Cerrar Sesion</a></li>
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
  Servicios
  ============================-->

  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Servicios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description" style="font-size: 20px;">Contamos con un personal capacitado para ofrecerte los mejores servicios.</p>
        </div>
      </div>
    </div>

    <div class="wrap" >

      <div class="tarjeta-wrap">
        <div class="tarjeta" >
          <div class="adelante card1"></div>
          <div class="atras">
            <p>Aca este empleado le esta haciendo mantenimiento a la caja de flipones de corriente.</p>
          </div>
        </div>
      </div>

      <div class="tarjeta-wrap">
        <div class="tarjeta">
          <div class="adelante card2"></div>
          <div class="atras">
            <p>Aca es una muestra de una empalmacion de cables en una plamfonera</p>
          </div>
        </div>
      </div>

      <div class="tarjeta-wrap">
        <div class="tarjeta">
          <div class="adelante card3"></div>
          <div class="atras">
            <p>Asi es como quedaria una caja de flipones bien ordenada y echa por nuestra empresa.</p>
          </div>
        </div>
      </div>

    </div>
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
