<?php
$conexion = mysqli_connect("fdb1028.awardspace.net", "4557783_cursofutbol", "Root12345", "cursofutbol");

// Verificar conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
