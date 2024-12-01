<?php
include 'conexion_be.php';

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];



// Consulta para insertar datos en la tabla
$query1 = "INSERT INTO inscripcion (nombre, apellido, cedula, telefono, direccion, edad) 
          VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$direccion', '$edad')";

//Verificar que el correo no se repita en la base de datos
$verificar_apellido = mysqli_query($conexion, "SELECT * FROM inscripcion WHERE apellido='$apellido' ");

if(mysqli_num_rows($verificar_apellido) > 0) {
    echo '
        <script>
            alert("Este apellido ya esta registrado, intenta con otra diferente");
            windows.location = "../curso.php";
        </script>
    ';
    exit();
}


// Ejecutar la consulta
$ejecutar1 = mysqli_query($conexion, $query1);

// Verificar si la consulta se ejecutó correctamente
if ($ejecutar1) {
    echo '
        <script>
            alert("Estudiante registrado exitosamente");
            window.location = "../curso.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error: cliente no registrado. Inténtalo de nuevo.");
            window.location = "../curso.php";
        </script>
    ';
}

    mysqli_close($conexion)
?>