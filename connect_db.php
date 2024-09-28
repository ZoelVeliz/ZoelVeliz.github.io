<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Cambia esto si tienes una contraseña
$dbname = "velcar"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
