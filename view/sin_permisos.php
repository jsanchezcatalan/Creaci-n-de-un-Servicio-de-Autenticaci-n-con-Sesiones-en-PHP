<?php
include_once '../config/session.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado - Sistema de Autenticación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="error-container">
            <h1>Acceso Denegado</h1>
            
            <div class="error-message">
                <p>No tienes permisos para acceder a esta página.</p>
                <p>Debes iniciar sesión primero.</p>
            </div>
            
            <a href="login.php" class="btn-login">Ir al Login</a>
        </div>
    </div>
</body>
</html>