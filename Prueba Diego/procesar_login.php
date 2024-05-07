<?php
$host= "localhost";
$user = "root";
$password= "1730759";
$db = "usuarios";
$puerto = "3307";

$conexion=new mysqli_connect($host, $user, $password, $db, $puerto);

if ($conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$consulta = "SELECT * FROM usuarios WHERE usuarios = '$usuario' AND contraseña = '$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0 ) {
    header("Location: sesioniniciada.php");
} else {
    echo "Usuario o contraseña incorrectos.";
}
