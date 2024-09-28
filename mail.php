<?php

if(isset($_POST['asunto']) && !empty($_POST['asunto']) &&
   isset($_POST['mensaje']) && !empty($_POST['mensaje']))
   {
       $destino = "stevenperezramirez31@gmail.com";
       $desde = "From:". "CodigoFacilito";
       $asunto = $_POST['asunto'];
       $mensaje = $_POST['mensaje'];
      mail ($destino, $desde, $asunto, $mensaje);
       echo "correo enviado...";
   }else{
       echo "Error mensaje no enviado";
   }

?>