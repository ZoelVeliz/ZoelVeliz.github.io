<?php
include 'configg.php';
$x=$_POST[casilla];



$con = mysql_connect($servidor,$usuarioBD,$passwordBD) or die("Problema en server");
mysql_select_db($baseDatos,$con) or die("problemas en DB");

foreach ($x as $value){  

    if(isset($_POST['btn_eliminar']))
      {

       

        $_DELETE_SQL =  "DELETE FROM galeriaimagenes WHERE archivo = '$value'";
         mysql_query($_DELETE_SQL, $con); 


 if($value == 'a.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
        if($value == '2.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '3.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '4.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '5.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '6.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '7.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '8.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '9.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '10.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '11.jpg')
          {
        unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }
        if($value == '12.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
        }

        if($value == '13.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '14.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '15.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '16.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '17.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '18.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '19.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '20.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '21.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '22.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '23.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '24.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '25.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '26.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '27.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '28.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '29.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '30.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '31.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '32.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == '33.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          if($value == 'asd.jpg')
          {
       unlink("C:\AppServ\www\Velcar3\imagenes\prueba/$value");
         }
          }
      

      echo "<center>";
      echo "Usuario Eliminado Correctamente!";
       echo '<script>window.location="publi.php"</script>';
      echo "</center>";
      }
      

    include("configg.php");
?>