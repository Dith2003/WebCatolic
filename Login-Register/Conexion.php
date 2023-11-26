<?php
$host = "localhost"; 
$usuario = "root";
$contrasena = "";
$base_de_datos = "BD_WebCatolic";

// Conexión a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

