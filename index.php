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

// Ejecutar la consulta
if (mysqli_query($conexion, $query)) {
    // Si la inserción fue exitosa, mostrar un mensaje de éxito
    echo "<script>
            alert('¡Datos enviados correctamente!');
            window.location.href = 'formulario.html'; // Redirigir al formulario original
          </script>";
} else {
    // Si hubo un error al guardar los datos
    echo "<script>
            alert('Error al guardar los datos: " . mysqli_error($conexion) . "');
            window.location.href = 'formulario.html'; // Redirigir al formulario original
          </script>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
