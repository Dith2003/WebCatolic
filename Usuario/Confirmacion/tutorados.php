<?php

$host1 = 'localhost'; 
$db1 = 'bd webcatolic'; 
$user1 = 'root'; 
$pass1 = ''; 

// Conexión a la primera base de datos
$conn1 = new mysqli($host1, $user1, $pass1, $db1);


if ($conn1->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn1->connect_error);
}

// Consulta en la primera base de datos
$query1 = "SELECT * FROM arch_tutor";
$result1 = $conn1->query($query1);

// Consulta en la segunda base de datos
$query2 = "SELECT * FROM usuarios";
$result2 = $conn1->query($query2);




// -------------------------- Documento cin




// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["cin"])) {
    $tipo_archivo11 = $_FILES["cin"]["type"];
    $target_dir = "tutor/";
    $target_file = $target_dir . basename($_FILES["cin"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo11 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["cin"]["tmp_name"], $target_file)) {
            $usuarioId = 0; // Valor predeterminado en caso de no encontrar el ID

            // Verificacion
            if ($result2) {
                // Obtiene la fila correspondiente al usuario actual
                $usuarioRow = $result2->fetch_assoc();

                // Verificar si se encontró la fila y si tiene la columna 'usuario_id'
                if ($usuarioRow && isset($usuarioRow['usuario_id'])) {
                    $usuarioId = $usuarioRow['usuario_id'];
                }
            }

            // Registro en la base de datos.
            $archivoNombre11 = $_FILES["cin"]["name"];
            $archivoRuta = $target_file;
            $queryInsert11 = "INSERT INTO arch_tutor (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre11', '$archivoRuta')";
            
            if ($conn1->query($queryInsert11) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito11 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success11=1&message11=$archivoNombreExito11");
                exit();
            } else {
                echo "Error al insertar en la base de datos: " . $conn1->error;
            }
        } else {
            // Mensaje de error al subir el archivo.
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Solo se permiten archivos PDF o JPG";
    }
}



// Cerrar conexiones
$conn1->close();
?>