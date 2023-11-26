<?php

    include('conexion.php');


    $agregar=$_POST['agregar'];

     if ($agregar == TRUE) {
        $titulo = $_POST["titulo"];
        $imagen = $_FILES["imagen"]["name"]; // Aquí deberías manejar la carga de archivos adecuadamente
        $contenido = $_POST["contenido"];

        // Aquí puedes procesar los datos como desees, por ejemplo, almacenarlos en una base de datos.
        $mysqli = "INSERT INTO noticias (titulo, imagen, contenido) VALUES ('$titulo', '$imagen',NULL, '$contenido')";
        $conn->query($mysqli);
        // Luego, redirige o muestra un mensaje de éxito.
        header("Location: /AG-Noticias.php?success=true");
        exit();
    }
?>


     
