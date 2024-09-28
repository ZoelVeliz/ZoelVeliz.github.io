

<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>



<?php
include 'configg.php';

$con = mysqli_connect($servidor,$usuarioBD,$passwordBD) or die("Problema en server");
mysqli_select_db($baseDatos,$con) or die("problemas en DB");

$res=mysqli_query("select * from galeriaimagenes",$con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <style>

    table {border-color:black;}

 .selected { background-color:#03C4EB; color:black;
  }



   th{
    color: black  ;
    background-color: #FFF ;
    text-align: center;


   }
input[type="submit"],
  input[type="reset"],
  input[type="button"],
  button,
  .button {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    background-color: #323037;
    border-radius: 4px;
    color: #ffffff !important;
    border: 0;
    cursor: pointer;
    display: inline-block;
    font-weight: 700;
    height: 3.15em;
    line-height: 3.25em;
    padding: 0 2.2em;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
  }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover,
    button:hover,
    .button:hover {
      background-color: #3e3c45;
    }



  </style>
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
</head>
<body>
<br><br>

<center>
<br><br><br><br><br>
<h1>Eliminar datos</h1>

<form method="post" action="eliminar.php" style="padding-left:; padding-right:;" >
 <center>
<table border="8" width="90%" height="900">

<tr>
<th  align="center">✓</th>
<th  align="center" width="1500" valign="center">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre de la Imagen</th>
<th  align="center">Vista Previa</th>
</tr>

<?php
while($fila=mysql_fetch_array($res)){
?>
<tr>
<td align="center"><input type="checkbox" name="casilla[]" value= "<?php echo $fila['archivo']; ?>"></td>
<td align ="center"><?php echo $fila['archivo']; ?></td>

<td aling = "center"> 
  <?php  


    echo'<a href="imagenes/'.$fila['directorio'].'/'.$fila['archivo'].'" rel="lightbox[galeria]" title="'.$fila['archivo'].'"><img width ="120" src="imagenes/'.$fila['directorio'].'/'.$fila['archivo'].'"/></a>'; ?>
</td>

</tr>
<?php
}
?>

</table>

</center>
<br>
 <div class="12u$">
                    <ul class="actions">
                      <center>

<input type="submit" value="Eliminar" name ="btn_eliminar" style=" background-color:  #03C4EB; border-radius: 10px; color: white;  width: 125px; height: 45px;" />
</center>
</ul>
</div>
</form>
</center>

<script>
// Evento que se ejecuta cada vez que se pulsa sobre un checkbox de la tabla
$("table input[type=checkbox]").on("click",function() {
  // si esta seleccionado el checkbox
  if($(this).is(":checked"))
  {

    // añadimos la clase selected
    $(this).parents("td").addClass("selected");

  }else{

    // quitamos la clase selected
    $(this).parents("td").removeClass("selected");
  }
});
</script>
</html>

<!--==========================
  Footer
============================-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
