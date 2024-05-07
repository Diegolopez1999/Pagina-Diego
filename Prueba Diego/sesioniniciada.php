<?php
// Inicia la sesión (asegúrate de haber hecho esto en todas las páginas)
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_USUARIOS['usuario'])) {
    // Si no ha iniciado sesión, redirige al formulario de inicio de sesión
    header("Location: login.php");
    exit; // Detiene la ejecución del script
}

// Obtén el nombre del usuario desde la sesión (puedes cambiar esto según tus necesidades)
$nombreUsuario = $_USUARIOS['usuario'];

// Aquí puedes agregar más lógica o mostrar otros datos específicos para el usuario

// HTML de la página de bienvenida
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $nombreUsuario; ?>!</h1>
    <p>Esta es tu página personal.</p>
    <!-- Agrega más contenido aquí según tus necesidades -->
    <a href="cerrar_sesion.php">Cerrar sesión</a> <!-- Enlace para cerrar sesión -->
</body>
</html>
