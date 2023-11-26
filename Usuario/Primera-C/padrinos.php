<?php

$host1 = 'localhost'; 
$db1 = 'archivo_tutorados'; 
$user1 = 'root'; 
$pass1 = ''; 

// Conexión a la primera base de datos
$conn1 = new mysqli($host1, $user1, $pass1, $db1);


if ($conn1->connect_error || $conn2->connect_error) {
    die("Error en la conexión a las bases de datos: " . $conn1->connect_error . " | " . $conn2->connect_error);
}

// Consulta en la primera base de datos
$query1 = "SELECT * FROM tutorados,padrinos";
$result1 = $conn1->query($query1);

// Consulta en la segunda base de datos
$query2 = "SELECT * FROM usuarios";
$result2 = $conn1->query($query2);




// -------------------------- Documento ActM




// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ActM"])) {
    $tipo_archivo11 = $_FILES["ActM"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["ActM"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo11 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["ActM"]["tmp_name"], $target_file)) {
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
            $archivoNombre11 = $_FILES["ActM"]["name"];
            $archivoRuta = $target_file;
            $queryInsert11 = "INSERT INTO padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre11', '$archivoRuta')";
            
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
        echo "Solo se permiten archivos PDF.";
    }
}



//--------------------------------- Documento ComproD



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ComproD"])) {
    $tipo_archivo12 = $_FILES["ComproD"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["ComproD"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo12 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["ComproD"]["tmp_name"], $target_file)) {
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
            $archivoNombre12 = $_FILES["ComproD"]["name"];
            $archivoRuta = $target_file;
            $queryInsert12 = "INSERT INTO padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre12', '$archivoRuta')";
            
            if ($conn1->query($queryInsert12) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito12 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success12=1&message12=$archivoNombreExito12");
                exit();
            } else {
                echo "Error al insertar en la base de datos: " . $conn1->error;
            }
        } else {
            // Mensaje de error al subir el archivo.
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Solo se permiten archivos PDF.";
    }
}


//--------------------------------- Documento Bolt



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["Bolt"])) {
    $tipo_archivo3 = $_FILES["Bolt"]["type"];
    $target_dir = "tutorados/";
    $target_file = $target_dir . basename($_FILES["Bolt"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo3 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["Bolt"]["tmp_name"], $target_file)) {
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
            $archivoNombre3 = $_FILES["Bolt"]["name"];
            $archivoRuta = $target_file;
            $queryInsert3 = "INSERT INTO tutorados (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre3', '$archivoRuta')";
            
            if ($conn1->query($queryInsert3) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito3 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success3=1&message3=$archivoNombreExito3");
                exit();
            } else {
                echo "Error al insertar en la base de datos: " . $conn1->error;
            }
        } else {
            // Mensaje de error al subir el archivo.
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Solo se permiten archivos PDF.";
    }
}

// Cerrar conexiones
$conn1->close();
$conn2->close();
?>