<?php
// Maneja los datos de usuarios del sistema

class User {
    
    //Obtiene los usuarios válidos del sistema

    public static function getValidUsers() {
        return [
            'admin' => '2710',
            'usuario' => 'Jesus',
            'CarlosBasulto' => '0000'
        ];
    }
    
    // Valida si las credenciales son correctas
     
    public static function validateCredentials($username, $password) {
        $users = self::getValidUsers();// Obtiene los usuarios válidos
        
        if (isset($users[$username]) && $users[$username] === $password) {
            return true;
        }
        
        return false;
    }
    
    //Crea una sesión para el usuario
    public static function createSession($username) {
        $_SESSION['usuario'] = $username;
        $_SESSION['hora_login'] = date('H:i:s');
        $_SESSION['fecha_login'] = date('d/m/Y');
    }
}
?>