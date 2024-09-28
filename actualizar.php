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

	</head>
	  <!--
	oncontextmenu = Click derecho.
	onselectstart = Seleccionar.
	ondragstart = Arrastrar
	-->
	<body >
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
         <li><a href="index.php" style="font-size: 18px;">Iniciar Sesión</a></li>
          <li><a href="fregistro.php" style="font-size: 18px;">Registrarse</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!-- ======================================================================================================================== -->
<div class="row">



	<div class="span12">

		<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<!--==========================
Subscrbe Section
============================-->
<section id="portfolio">
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="col-md-12">
				<h3 class="section-title">Actualizar datos</h3>
				<div class="section-title-divider"></div>
				<p class="section-description" style="font-size: 20px;">Selecciona y cambia los datos que desees.</p>
			</div>
		</div>

    <img src="img/actualizar.png" class="imgresponsive" width="80px" height="80px" alt="">

     <div class="text-center" style="padding-left:30%; padding-right:30%">
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" onkeypress="return solonumeros(event)" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input maxlength="20" type="text" onkeypress="return sololetras(event)" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input maxlength="20" type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input maxlength="35" type="text" onkeypress="return email(event)" name="email" value="<?php echo $email?>"><br>
				Pssword administrador<br> <input maxlength="20" type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>

				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary" style=" background-color:  #03C4EB; border-radius: 10px; color: white;  width: 85px; height: 45px;">
			</form>




		<div class="span8">

		</div>
		</div>
		<br/>



		<!--EMPIEZA DESLIZABLE-->

		 <!--TERMINA DESLIZABLE-->





		</div>
    </div>

<br><br><br>

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
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
