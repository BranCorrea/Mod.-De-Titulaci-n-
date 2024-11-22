<?php

session_start();

// Conexión a la base de datos
$server = "localhost";
$user = "bran";
$pass = "1234";
$db = "registros";

$conexion = mysqli_connect($server, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos enviados desde el formulario
$ncuenta = $_POST['registerName'];
$correo = $_POST['registerEmail'];
$password = $_POST['registerPassword'];

// Consultar en la base de datos si el usuario existe
$query = "SELECT * FROM datos WHERE ncuenta = ? AND correo = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("is", $ncuenta, $correo); // "i" para entero, "s" para string
$stmt->execute();
$result = $stmt->get_result();

// Verificar si el número de cuenta y correo coinciden
if ($result->num_rows > 0) {
    // Usuario encontrado
    $row = $result->fetch_assoc();

}
    // Verificar la contraseña
if ($password === $row['contraseña']) {
    // Inicio de sesión exitoso
    $_SESSION['ncuenta'] = $row['ncuenta'];
    $_SESSION['correo'] = $row['correo'];

    // Redirigir al usuario a la página de inicio o dashboard
    header("Location: iniciosesioncorrecto.php");
    exit();
} else {
    // Contraseña incorrecta
    echo "<script>alert('Contraseña incorrecta. Inténtalo de nuevo.'); window.location.href = 'registro.html';</script>";
}

// Cerrar la conexión
$conexion->close();
?>


