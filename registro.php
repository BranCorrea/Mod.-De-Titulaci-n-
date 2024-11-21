<?php
$server = "localhost";
$user = "bran";
$pass = "1234";
$db = "regitros";

// Cambiar mysqli() por mysqli_connect()
$conexion = mysqli_connect($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_error); // Cambié connect_err>
} else {
    echo "Conectado";
}

?>

