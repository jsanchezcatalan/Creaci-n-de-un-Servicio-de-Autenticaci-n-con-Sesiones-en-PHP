<!--valida las credenciales-->

<?php
include_once '../config/session.php';
include_once '../models/user.php';

// Verificar que la petición sea por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtengo los datos del formulario
    // Estos vienen del login.php con name="usuario" y name="password"
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Validar credenciales usando el modelo User
    // En lugar de tener el array aquí, usamos la función del modelo
    if (User::validateCredentials($usuario, $password)) {
        
        // LAS CREDENCIALES SERÍAN CORRECTAS
        
        // Crear la sesión usando el modelo User
        // Esto guarda usuario, hora_login y fecha_login automáticamente
        User::createSession($usuario);
        
        // Redirigir a la pantalla de bienvenida
        header("Location: ../view/bienvenida.php");
        exit(); // Detiene la ejecución después de redirigir
        
    } else {
        
        // CREDENCIALES INCORRECTAS
        
        // Redirigir al login con parámetro de error
        // El ?error=1 será detectado por $_GET['error'] en login.php
        header("Location: ../view/login.php?error=1");
        exit();
    }
    
} else {
    // Si no es POST (se intento acceder directamente), redirigir al login
    header("Location: ../view/login.php");
    exit();
}
?>