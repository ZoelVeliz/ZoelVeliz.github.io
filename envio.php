<?php
// recibimos las variables por post
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo $nombre. "ha dicho: <br/>" . $mensaje;

if(mail('stevenperezramirez31@gmail.com', $asunto, $mensaje)){
	echo "mail enviado";
} else{
	echo "no enviado";

}



