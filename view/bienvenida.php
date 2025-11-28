<?php
// Incluir configuración de sesiones
include_once '../config/session.php';

// Verificar que existe una sesión activa, por si quiere entrar en bienvenida directamente.
// Si NO existe $_SESSION['usuario'], significa que no está logueado
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de sin permisos
    header("Location: sin_permisos.php");
    exit();//termina ejecución.
}

// Si llegamos aquí, el usuario SÍ está logueado
// Obtener datos de la sesión
$nombre_usuario = $_SESSION['usuario'];
$hora_login = $_SESSION['hora_login'];
$fecha_login = $_SESSION['fecha_login'];

// Obtengo la hora y fecha actual
$hora_actual = date('H:i:s');
$fecha_actual = date('d/m/Y');

// Obtengo el día de la semana en español
$dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
$dia_semana = $dias[date('w')];

// Mensaje personalizado según la hora del día
$hora = (int)date('H');

if ($hora >= 6 && $hora < 12) {
    $saludo = "¡Buenos días";
} elseif ($hora >= 12 && $hora < 20) {
    $saludo = "¡Buenas tardes";
} else {
    $saludo = "¡Buenas noches";
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Sistema de Autenticación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>
        <?php echo $saludo; ?>, 
        <?php echo $nombre_usuario; ?>
        </h1>
        
        <div class="welcome">
            <h2>Información de tu sesión</h2>
            
            <div class="informacion">
                <p><strong>Usuario:</strong> <?php echo $nombre_usuario; ?></p>
                <p><strong>Fecha de login:</strong> <?php echo $fecha_login; ?></p>
                <p><strong>Hora de login:</strong> <?php echo $hora_login; ?></p>
            </div>
            
            <div class="informacion">
                <p><strong>Hoy es:</strong> <?php echo $dia_semana; ?>, <?php echo $fecha_actual; ?></p>
                <p><strong>Hora actual:</strong> <?php echo $hora_actual; ?></p>
            </div>
        </div>
        
        <div class="mensaje_bienvenida">
            <p>Has iniciado sesión correctamente en el sistema.</p>
            <p>Puedes cerrar sesión cuando quieras usando el botón de abajo.</p>
        </div>
        
        <a href="../controllers/cerrar_sesion.php" class="btn-logout">Cerrar Sesión</a>
    </div>
</body>
</html>