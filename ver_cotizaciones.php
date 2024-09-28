<?php
session_start();
require 'connect_db.php'; // Conectar a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales
    $sql2 = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$email'");
    
    if ($f2 = mysqli_fetch_assoc($sql2)) {
        // Verifica que la contraseña coincida
        if ($password == $f2['pasadmin']) {
            $_SESSION['id'] = $f2['id'];
            $_SESSION['user'] = $f2['user'];
            $_SESSION['rol'] = $f2['rol'];

            // Verifica que el rol sea 1 (Administrador)
            if ($f2['rol'] == 1) {
                echo "<script>alert('Bienvenido Administrador');</script>";
                echo "<script>location.href='todas_las_cotizaciones.php';</script>"; // Redirige a la página de todas las cotizaciones
            } else {
                echo "<script>alert('No es un usuario admin');</script>";
            }
        } else {
            echo "<script>alert('Email o contraseña incorrectos');</script>";
        }
    } else {
        echo "<script>alert('Email o contraseña incorrectos');</script>";
    }
}
?>