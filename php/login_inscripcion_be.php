<?php
session_start();
include 'conexion_be.php';

// Function to sanitize and validate input
function sanitizeInput($conexion, $input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return mysqli_real_escape_string($conexion, $input);
}

// Sanitize inputs
$nombre = sanitizeInput($conexion, $_POST['nombre']);
$apellido = sanitizeInput($conexion, $_POST['apellido']);
$cedula = sanitizeInput($conexion, $_POST['cedula']);
$telefono = sanitizeInput($conexion, $_POST['telefono']);
$direccion = sanitizeInput($conexion, $_POST['direccion']);
$edad = filter_var($_POST['edad'], FILTER_VALIDATE_INT);

// Validate required fields
$errors = [];

if (empty($nombre)) {
    $errors[] = "El nombre es obligatorio";
}

if (empty($apellido)) {
    $errors[] = "El apellido es obligatorio";
}

if (empty($cedula)) {
    $errors[] = "La cédula es obligatoria";
}

if ($edad === false || $edad < 0 || $edad > 120) {
    $errors[] = "Edad inválida";
}

// If there are validation errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: ../inscripcion.php");
    exit;
}

// Check if cedula already exists
$validar_cedula = mysqli_prepare($conexion, "SELECT * FROM inscripcion WHERE cedula = ?");
mysqli_stmt_bind_param($validar_cedula, "s", $cedula);
mysqli_stmt_execute($validar_cedula);
$resultado = mysqli_stmt_get_result($validar_cedula);

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['error'] = "Esta cédula ya está registrada";
    header("Location: ../inscripcion.php");
    exit;
}

// Prepare and execute insert statement using prepared statement
$stmt = mysqli_prepare($conexion, 
    "INSERT INTO inscripcion (nombre, apellido, cedula, telefono, direccion, edad) 
     VALUES (?, ?, ?, ?, ?, ?)"
);

mysqli_stmt_bind_param($stmt, "sssssi", 
    $nombre, $apellido, $cedula, $telefono, $direccion, $edad
);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['inscripcion'] = $cedula;
    $_SESSION['success'] = "Registro exitoso";
    header("Location: ../index.php");
    exit;
} else {
    $_SESSION['error'] = "Error al registrar: " . mysqli_error($conexion);
    header("Location: ../inscripcion.php");
    exit;
}
?>