Este proyecto implementa un sistema básico de autenticación de usuarios en una aplicación web utilizando PHP y manejo de sesiones.

📝 Descripción del Proyecto
El objetivo de esta aplicación es simular un proceso de inicio de sesión, manteniendo el estado del usuario mediante sesiones de PHP. No se utiliza base de datos; las credenciales válidas están predefinidas en un array.

Características Principales:

Pantalla de Login (view/login.php): Formulario para introducir nombre de usuario y contraseña.
Validación de Credenciales (controllers/procesar_login.php): Verifica el usuario y contraseña contra un array predefinido.
Pantalla de Bienvenida (view/bienvenida.php): Muestra un mensaje personalizado, el nombre del usuario, y la hora actual.
Restricción de Acceso (view/sin_permisos.php): Redirige a esta pantalla si se intenta acceder a la página de bienvenida sin estar autenticado.
Cerrar Sesión (controllers/cerrar_sesion.php): Enlace para terminar la sesión y redirigir al login.