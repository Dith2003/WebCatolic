<?php

$errores = '';
// Incluir el archivo de conexión
include('Conexion.php');

// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT id, email, contrasena FROM usuario WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        if (password_verify($contrasena, $fila['contrasena'])) {
            header('Location: Usuario/Index.php');
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

// Cerrar la conexión
$conexion->close();
?>