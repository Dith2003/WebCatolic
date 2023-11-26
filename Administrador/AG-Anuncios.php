<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleM.css">

    <style>
        /* The Modal (background) */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #0962b6;
    width: 80%;
  }
  
  /* Close Button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  
    </style>

</head>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">Web<span>Catolic</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="Index.php">Inicio</a>
        <a href="AD-Inscripciones.php">Inscripciones</a>
        <a href="AD-Asistencias.php">Asistencias</a>
        <a href="AD-Calificaciones.php">Calificaciones</a>
        <a href="AD-Archivos.php">Archivos</a>
        <a href="AG-Anuncios.php">Anuncios</a>
        <a href="AG-Noticias.php">Noticias</a>
    </nav>

</header>

<h1 class="heading"> agregar anuncios </h1>

<!-- review section  -->

<section class="review">

    <form class="">
    
    <a class="btn" type="button" id="openModalBtn">Crear Anuncio</a>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <form action="CRUDN/Guardar.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            <br>   
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen">
            <br>
            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" required></textarea>
            <br>
            <button type="button" class="closeModalBtn btn">Cancelar</button>
            <button type="submit" class="btn" value="agregar">Guardar</button>
        </form>
        </div>

    </div>
    
    </form>
    
    <div class="box">
    <?php
        // Archivo que contiene la lógica para manejar las noticias
        include 'CRUDN/Obtener.php';

        // Obtener todas las noticias
        $noticias = obtenerNoticias();

        // Mostrar noticias
        foreach ($noticias as $noticia) {
            echo '<div>';
            echo '<h2>' . $noticia['titulo'] . '</h2>';
            echo '<p>Fecha de creación: ' . $noticia['fecha_creacion'] . '</p>';
            
            // Mostrar la imagen si está presente
            if (!empty($noticia['imagen'])) {
                echo '<img src="' . $noticia['imagen'] . '" alt="Imagen de la noticia">';
            }
            
            echo '<p>' . $noticia['contenido'] . '</p>';
            
            // Botones de editar y eliminar
            echo '<a href="Editar.php?id=' . $noticia['id'] . '">Editar</a>';
            echo '<a href="Eliminar.php?id=' . $noticia['id'] . '">Eliminar</a>';
            
            echo '</div>';
        }
    ?>

    </div>

</section>






<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, maxime!</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">course</a>
            <a href="#">teacher</a>
            <a href="#">price</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
           <p> <i class="fas fa-envelope"></i> studysmart@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
        </div>

    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

</div>















<!-- custom js file link -->
<script src="js/script.js"></script>
<script src="js/scriptM.js"></script>

</body>
</html>