<?php
//Redirige automáticamente al login o a la bienvenida según el estado de la sesión

include_once 'config/session.php';

// Verificar si ya hay una sesión activa
if (isset($_SESSION['usuario'])) {
    // Si está logueado, redirigir a bienvenida
    header("Location: view/bienvenida.php");
} else {
    // Si no está logueado, redirigir al login
    header("Location: view/login.php");
}

exit();
?>