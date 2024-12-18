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
    echo "<script>alert('Datos guardados correctamente.')</script>";
} else {
    $error = mysqli_error($conexion);
    echo "<script>alert('Error al guardar los datos: $error')</script>";
}


// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Met. Titulacion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio"> <img src="img/escudo.png" alt="logos institucion"></a> 
        <h2 id="tit1">FACULTAD DE ESTUDIOS SUPERIORES <br><span> ARAGON</span></h2>
        <h2 id="tit">METODOS DE TITULACION <br>INGENIERIA EN COMPUTACION.</h2>
        <div><a id="inicio" href="index.html">INICIO</a></div>
        <div><a id="sesion" href="registro.html">INICIAR SESION</a></div>
        <a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio"><img id="aragonEscudo" src="img/aragonlogo.png" alt="escudo escuela"></a>

    </header>
    <div class="contenedorprinc">

    <div class="planes">
        <h2>ELIGE TU PLAN DE ESTUDIOS</h2>
        <div><a href="80_82.html"><button>80-82</button></a></div>
        <div><a href="1279.html"><button>1279</button></a></div>
        <div><a href="2119.html"><button>2119</button></a></div>
    </div>

    <div class="acerca">
        <h2 id="texto">SOBRE LA CARRERA</h2>
        <p id="textoCar">La carrera de Ingeniería en Computación tiene el objetivo de formar profesionales líderes con conocimientos teóricos y prácticos para la solución de problemas computacionales, comprometidos con las necesidades y desarrollo del país. <br><br>

            Asimismo, contarán con un gran espíritu universitario, compromiso con el crecimiento del país, capacidades para encontrar soluciones innovadoras y un alto nivel de conocimientos en matemáticas, programación e ingeniería de software, procesamiento de la información, arquitectura de computadoras, redes, seguridad y control. <br><br>
            
            Nuestra visión es ser una carrera de vanguardia que asegure la actualización constante de su planta docente, infraestructura y planes de estudio, que cuente con una comunidad egresada capaz responder a los cambios que demande el país.</p>
        
            <div><iframe width="560" height="315" src="https://www.youtube.com/embed/hI3vvGqRxjg?si=ayMFqU4UP68Nui6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>


    </div>

    
</div>

<footer>
    <div class="footer">
       <div class="fte"> <p id="footerText">Hecho en México, Universidad Nacional Autónoma de México (UNAM), todos los derechos reservados 2023. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso previo por escrito de la institución.</p></div>
        <div class="ft">
           <div id="foot"> <p>Teléfono(s)</p>
            <p>55 5623 0222 <br></p></div>
            <div><p>Correo electrónico</p>
            <a class="correo" href="st.computacion@aragon.unam.mx">st.computacion@aragon.unam.mx</a><br>
            <a class="correo" href="computacion@aragon.unam.mx">computacion@aragon.unam.mx</a>
        </div>
    </div>
    </div>
</footer>

</body>
</html>