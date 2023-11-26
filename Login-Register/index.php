<?php
// Incluir el archivo de conexión
include 'Conexion.php';

// Iniciar sesión
session_start();

// Proceso de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['ApP'];
    $apellido_materno = $_POST['ApM'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $contrasena = $_POST['contrasena']; password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hashear la contraseña antes de almacenarla en la base de datos

    // Insertar datos en la base de datos
    $sql = "INSERT INTO Usuario (Nombre, Apellido_Paterno, Apellido_Materno, email, telefono, contrasena) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$email', '$telefono', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro Exitoso!";
    } else {
        echo "Error en el registro: " . $conn->error;
    }
}

// Proceso de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Obtener datos del formulario
    $email_login = $_POST['email'];
    $contrasena_login = $_POST['contraseña'];

    // Verificar credenciales
    $sql = "SELECT * FROM Usuario WHERE email='$email_login' AND contrasena='$contrasena_login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena_login, $row['contrasena'])) {
            $_SESSION['user_id'] = $row['id']; // Guardar el ID del usuario en la sesión
            header("Location: ./Usuario/Index.php"); // Redirigir a la página de inicio
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inicio de Sesión | Registro</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="POST">
                <h1>Registrarse</h1>
                <br>
                <span>Completa los siguientes requisitos</span>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="ApP" placeholder="Apellido Paterno">
                <input type="text" name="ApM" placeholder="Apellido Materno">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="tel" placeholder="Telefono">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <button type="submit" name="register">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="POST">
                <h1>Iniciar Sesión</h1>
                <br>
                <span>Ingresa tu Email y tu Contraseña</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <!--<a href="#">Forget Your Password?</a> -->
                <br>
                <button type="submit" name="login">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido!</h1>
                    <p>Nos alegra que te unas a nuestra plataforma</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido, Amigo!</h1>
                    <p>¿Aun no tienes cuenta? ¡Vamos a registrarnos!</p>
                    <button class="hidden" id="register">Nueva cuenta</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>

