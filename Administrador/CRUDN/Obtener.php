<?php
// Conexión a la base de datos (ajusta los datos según tu configuración) 
    include('conexion.php');

// Función para obtener todas las noticias
function obtenerNoticias() {
    global $mysqli;
    $resultado = $mysqli->query("SELECT * FROM noticias");
    
    $noticias = array();
    
    while ($fila = $resultado->fetch_assoc()) {
        $noticias[] = $fila;
    }
    
    return $noticias;
}
?>
