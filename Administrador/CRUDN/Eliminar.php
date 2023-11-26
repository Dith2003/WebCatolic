<?php

    include('conexion.php');

    // Página para eliminar noticias
    if (isset($_GET['id'])) {
        $id_noticia = $_GET['id'];
        
        // Aquí puedes implementar la lógica para eliminar la noticia con el ID dado
        $mysqli = "DELETE FROM noticias WHERE id = $id_noticia";
        $conn->query($mysqli);
        // Después de eliminar, redirige a la página principal
        header('Location: /AG-Noticias.php');
        exit;
    }
?>
