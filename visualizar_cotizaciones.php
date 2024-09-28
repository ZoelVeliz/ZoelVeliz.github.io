<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['rol'] != 1) {
    header("Location:../index.php"); // Redirige si no es admin
    exit();
}

// Conectar a la base de datos
require 'connect_db.php';

// Obtener las cotizaciones
$sql = "SELECT * FROM cotizaciones";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Cotizaciones</title>
</head>
<body>
    <h1>Lista de Cotizaciones</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mensaje'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay cotizaciones</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
