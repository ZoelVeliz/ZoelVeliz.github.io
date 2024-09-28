



<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>

     <?php

include 'config.php';

ini_set('error_reporting',0);

if(!isset($_SESSION['usuario']))
{
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin | Industrias Velcar Inc.</title>
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


    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/agregarNuevaFila.js"></script>
        <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>

        <!-- Lightbox -->
        <script type="text/javascript" src="lightbox/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" />
  <title>Publicaciones</title>


   <link href="css/style.css" rel="stylesheet">


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.jscroll.js"></script>


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
          <a href="admin.php"><img src="img/Velcar.png" alt="Velcar" title="" /></img></a>
          <!-- Uncomment below if you prefer to use a text image -->
          <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="admin.php" style="font-size: 18px;">Inicio</a></li>

            <li class="menu-has-children"><a href="admin.php" style="font-size: 18px;">Gestor de Datos</a>
              <ul>
                <li><a href="lista.php" style="font-size: 16px;">Solicitudes</a></li>
                <li class="menu-has-children"><a href="academia3/admin.php" style="font-size: 16px;">Empleados</a>
                  <!-- <ul>
                    < <li><a href="nuevoempleado.php">Nuevo empleado</a></li>
                    <li><a href="actempleado.php">Actualizar datos</a></li>
                    <li><a href="eliminarempleado.php">Eliminar datos</a></li> -->
                    <!-- <li><a href="buscarempleado.php">Buscar empleado</a></li>
                    <li><a href="verempleado.php">Ver registros</a></li>
                  </ul> -->
                </li>
                <li><a href="publi.php" style="font-size: 16px;">Proyectos</a></li>
              </ul>
            </li>
            <!-- <li><a href="cotpendiente.php">Cotizaciones pendientes</a></li>
            <li><a href="contactoempleado.php">Contactar empleado</a></li> -->
            <li><a href="academia3/desconectar.php" style="font-size: 18px;">Cerrar Sesión</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->


<br><br>


  <div class="galeria">
            <h1>Mis Imagenes</h1>
            <?php
                require 'configg.php';
                require 'GestorArchivos.php';

                $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);

                $consulta = "SELECT archivo, directorio FROM galeriaimagenes ORDER BY id";
                $resultado = $conexion->query($consulta);

                // Muestra las imagenes de la galeria.
                while($filas = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    // Se comprueba que existan las imagenes
                    if (file_exists("imagenes/".$filas["directorio"]."/".$filas["archivo"])){
                        echo'<a href="imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'" rel="lightbox[galeria]" title="'.$filas['archivo'].'"><img src="imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'"/></a>';
                    }
                }
            ?>
        </div>

        <div id="subirImagenes">

            <!-- Para poder subir archivos con PHP hay que poner enctype="multipart/form-data" para que no se encripte ningun caracter y el archivo no se modifique/estropee -->
            <form action="#" method="POST" enctype="multipart/form-data">
                <table id="formularioSubida" border="0">
                    <thead>
                        <th>Elige los archivos que quieras subir</th>
                    </thead>
                    <tr>
                        <td>
                            <div class="inputImagenModificado">
                                <input class="inputImagenOculto" name="imagen1" type="file" style ="background-color:#03C4EB;">
                                <div class="inputParaMostrar">
                                    <input>
                                    <style>
                                    input{
                                      color:black;
                                    }
                                  </style>
                                    <img src="imagenes/button_select2.gif">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" id="botonAnnadir" onClick="agregarFila('formularioSubida','botonAnnadir')" value="Añadir archivo" style="width:188px; background-color:  #03C4EB; border-radius: 10px; color:white;">
                            <input type="submit" name="botonSubir" value="Subir" style="background-color:  #03C4EB; border-radius: 10px; color: white;" >
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                // Subir todas las imagenes
                if(isset($_POST['botonSubir'])){
                    subirImagenes('prueba',$conexion);
                      echo '<script>window.location="publi.php"</script>';
                }
            ?>
            <br />
            <center><h3 class="box-title" style="color: black;"><b>¿Quieres Eliminar Una Imagen? </b></h3>
                    <div class="6u$ 12u$(xsmall)">

                  </div>


                    <br>


  <div class="12u$">
                    <ul class="actions">
                     <link><a href="eli.php"> <input type="submit" value="Eliminar" class="special" name="btn_eliminar" style=" background-color:  #03C4EB; border-radius: 10px; color: white;  width: 85px; height: 45px;"></link></a>

                    </ul>
                  </div>
                  </form></center>

                      <!-- Proceso de Eliminar .-->




        </div>

        <!-- Muestra el estilo modificado para el input file y cambia la opacidad de las imagenes de la galeria     -->
        <body onLoad="
            mostrarInputFileModificado('imagen1');
            cambiarOpacidadImagenes(0.5);
        ">


?> <br><br><br><br><br><br><br><br><br><br>
<br>
    <!-- Publicacion .-->
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
