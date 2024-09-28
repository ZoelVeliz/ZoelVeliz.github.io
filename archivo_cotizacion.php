<?php
// Conectar a la base de datos
require 'connect_db.php'; // Asegúrate de que este archivo tenga la conexión correcta

// Verificar si se enviaron datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Preparar la consulta
    $sql = "INSERT INTO cotizaciones (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Bind y ejecutar
    $stmt->bind_param("sss", $nombre, $email, $mensaje);
    
    if ($stmt->execute()) {
        echo "Cotización enviada con éxito.";
        // Redirigir a una página de éxito o mostrar un mensaje
        // header("Location: success.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y conexión
    $stmt->close();
    $conn->close();
} else {
    echo "No se recibieron datos.";
}
?>
