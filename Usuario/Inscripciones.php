<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        form {
            background-color: #E1DFDC;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 700px;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 1.7rem;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            appearance: none;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        @media only screen and (max-width: 1000px) {
            form {
                max-width: 100%;
            }
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
        <a href="Noticias.php">Noticias</a>
        <a href="Inscripciones.php">Inscripciones</a>
        <a href="Anuncios.php">Anuncios</a>
        <a href="Alumno.php">Alumno</a>
        <a href="/WebCatolic/Index.php">Cerrar Sesión</a>
    </nav>

</header>

<h1 class="heading"> Inspcripciones </h1>

<!-- teacher section  -->

<section class="teacher">

    <div class="box">
        <form action="#" method="post">
            <div class="form-section">
                <h2>Datos del Tutor</h2>
                <label for="tutorNombre">Nombre:</label>
                <input type="text" id="tutorNombre" name="tutorNombre" required>

                <label for="tutorApellidos">Apellidos:</label>
                <input type="text" id="tutorApellidos" name="tutorApellidos" required>

                <label for="tutorDomicilio">Domicilio:</label>
                <input type="text" id="tutorDomicilio" name="tutorDomicilio" required>

                <label for="tutorTelefono">Teléfono:</label>
                <input type="tel" id="tutorTelefono" name="tutorTelefono" required>

                <label for="tutorEmail">Email:</label>
                <input type="email" id="tutorEmail" name="tutorEmail" required>
            </div>

            <div class="form-section">
                <h2>Datos del Alumno</h2>
                <label for="alumnoNombre">Nombre:</label>
                <input type="text" id="alumnoNombre" name="alumnoNombre" required>

                <label for="alumnoApellidos">Apellidos:</label>
                <input type="text" id="alumnoApellidos" name="alumnoApellidos" required>

                <label for="alumnoEdad">Edad:</label>
                <input type="number" id="alumnoEdad" name="alumnoEdad" required>

                <label for="alumnoSexo">Sexo:</label>
                <select id="alumnoSexo" name="alumnoSexo" required>
                    <option value="" disabled selected>Seleccionar opción</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>

            </div>

            <button type="submit">Enviar</button>
        </form>

    </div>

</section>



<!-- footer section  -->

<section class="footer">
        
    <div class="credit"> Created By <span> Mr. Web Designer </span> | All Rights Reserved </div>

</section>

</div>















<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>