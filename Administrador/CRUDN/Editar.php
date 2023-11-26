<?php

    include('conexion.php');

    // Página para editar noticias
    if (isset($_GET['id'])) {
        $id_noticia = $_GET['id'];
        
        // Aquí puedes implementar la lógica para cargar los datos de la noticia con el ID dado
        $mysqli = "UPDATE noticias SET titulo='$titulo', imagen='$imagen', contenido='$contenido' WHERE id=$id_noticia";
        $conn->query($mysqli);
        // Luego, puedes mostrar un formulario prellenado con los datos de la noticia
        echo '<form action="Guardar.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $id_noticia . '">';
        // Agrega aquí los campos del formulario (título, fecha, imagen, contenido)
        echo '<input type="submit" value="Guardar cambios">';
        echo '</form>';
    }
?>
