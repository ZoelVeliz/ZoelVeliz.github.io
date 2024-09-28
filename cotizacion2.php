<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
} elseif ($_SESSION['rol'] == 1) {
  header("Location:index2.php");
}
?>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Cotización | Industrias Velcar Inc.</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("form").on("submit", function(event) {
        event.preventDefault(); // Previene el envío del formulario

        // Envía el formulario mediante AJAX
        $.ajax({
          type: "POST",
          url: "archivo_cotizacion.php", // URL del archivo que procesa el formulario
          data: $(this).serialize(), // Serializa los datos del formulario
          success: function(response) {
            // Muestra la alerta de éxito
            alert("Tu mensaje ha sido enviado. ¡Gracias!");
            // Limpia el formulario
            $(this).trigger("reset");
          }.bind(this), // Asegura que 'this' se refiera al formulario
          error: function() {
            alert("Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.");
          }
        });
      });
    });
  </script>
</head>

<body onKeyDown="checkKey(event)" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  <div id="preloader"></div>

  <!-- Header Section -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="academia3/index2.php"><img src="img/Velcar.png" alt="Velcar" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="academia3/index2.php">Inicio</a></li>
          <li><a href="cotizacion2.php">Cotización</a></li>
          <li><a href="rolusuario/contacto.php">Contacto</a></li>
          <li><a href="academia3/index.php">Cerrar Sesión</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Cotización Section -->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Solicitud de Cotización</h3>
          <div class="section-title-divider"></div>
          <p class="section-description" style="font-size: 19px">¿Tienes alguna duda de algún servicio? Realiza tu cotización!</p>
        </div>
      </div>

      <div class="row">
        <div style="padding-left: 30%; padding-right: 30%;">
          <div class="form">
            <form action="archivo_cotizacion.php" method="post">
              <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!</div>
              <div id="errormessage"></div>

              <div class="form-group">
                <input type="text" onkeypress="return sololetras(event)" class="form-control" name="nombre" id="Nombre0" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres." maxlength="20" required autofocus />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="email" onkeypress="return email(event)" class="form-control" name="email" id="Email0" placeholder="Email" data-rule="email" data-msg="Introduzca un email válido" maxlength="35" required />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="mensaje" id="Mensaje0" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje" style="max-width: 100%; min-width: 100%; max-height: 200px; min-height: 200px;" maxlength="800" required></textarea>
                <div class="validation"></div>
              </div>

              <center><input type="submit" value="Enviar" style="background-color: #03C4EB; border-radius: 10px; color: white; width: 125px; height: 45px;" /></center>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
  </section>

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Industrias Velcar Inc.</strong> | Todos los derechos reservados.
          </div>
          <div class="credits">
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/extra.js"></script>
  <script src="contactform/contactform.js"></script>
</body>

</html>
