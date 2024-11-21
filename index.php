<?php
// Conexión a la base de datos
$server = "localhost";
$user = "bran";
$pass = "1234";
$db = "registros";

$conexion = mysqli_connect($server, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los valores enviados desde el formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$planEstu = $_POST['planEstu'];
$nCuenta = $_POST['nCuenta'];
$semestre = $_POST['semestre'];
$metodo = $_POST['metodo'];

// Crear la consulta SQL
$query = "INSERT INTO datos (planEstu, nombre, apellido1, apellido2, correo, nCuenta, semestre, metodo, contraseña) 
          VALUES ('$planEstu', '$nombre', '$apellido1', '$apellido2', '$correo', '$nCuenta', '$semestre', '$metodo', '$contraseña')";

// Mostrar la consulta para depuración
echo "<pre>Consulta SQL: $query</pre>";

// Ejecutar la consulta
if (mysqli_query($conexion, $query)) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
