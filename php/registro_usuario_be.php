<?php
include 'conexion_be.php';

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];



// Consulta para insertar datos en la tabla
$query = "INSERT INTO usuario (nombre, correo, usuario, contrasena) 
          VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            windows.location = "../loginyregistro.php";
        </script>
    ';
    exit();
}

//Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");
            windows.location = "../loginyregistro.php";
        </script>
    ';
    exit();
}


// Ejecutar la consulta
$ejecutar = mysqli_query($conexion, $query);

// Verificar si la consulta se ejecutó correctamente
if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../loginyregistro.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error: Usuario no registrado. Inténtalo de nuevo.");
            window.location = "../loginyregistro.php";
        </script>
    ';
}

    mysqli_close($conexion)
?>
