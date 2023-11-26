<?php
// Incluir el archivo de conexión
include('Conexion.php');

// Verificar si se envió el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['ApP'];
    $apellidoM =  $_POST['ApM'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $contrasena = $_POST['contrasena'];

    // Hash de la contraseña (puedes usar password_hash para almacenar contraseñas de forma segura)
    $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuario (Nombre, Apellido_Paterno, Apellido_Materno, email, telefono, contrasena) VALUES ('$nombre','$apellidoP','$apellidoM','$email','$telefono', '$hash_contrasena')";

    if ($conexion->query($sql) === TRUE) {
        header('location: Login-Register/index.php');
    } else {
        echo "Error en el registro: " . $conexion->error;
    }
}

require '/Login-Register/Index.php';

// Cerrar la conexión
$conexion->close();
?>