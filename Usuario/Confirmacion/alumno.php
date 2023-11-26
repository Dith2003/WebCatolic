<?php

$host1 = 'localhost'; 
$db1 = 'bd webcatolic'; 
$user1 = 'root'; 
$pass1 = ''; 

// Conexión a la primera base de datos
$conn1 = new mysqli($host1, $user1, $pass1, $db1);


if ($conn1->connect_error) {
    die("Error en la conexión a las bases de datos: " . $conn1->connect_error);
}

// Consulta en la primera base de datos
$query1 = "SELECT * FROM Arch_alumno";
$result1 = $conn1->query($query1);

// Consulta en la segunda base de datos
$query2 = "SELECT * FROM usuarios";
$result2 = $conn1->query($query2);




// -------------------------- Documento ActM




// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ActM"])) {
    $tipo_archivo113 = $_FILES["ActM"]["type"];
    $target_dir = "alumno/";
    $target_file = $target_dir . basename($_FILES["ActM"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo113 == "application/pdf") {
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
            $archivoNombre113 = $_FILES["ActM"]["name"];
            $archivoRuta = $target_file;
            $queryInsert113 = "INSERT INTO arch_alumno (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre113', '$archivoRuta')";
            
            if ($conn1->query($queryInsert113) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito113 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success113=1&message113=$archivoNombreExito113");
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



//--------------------------------- Documento ComproD



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ComproD"])) {
    $tipo_archivo123 = $_FILES["ComproD"]["type"];
    $target_dir = "alumno/";
    $target_file = $target_dir . basename($_FILES["ComproD"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo123 == "application/pdf") {
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
            $archivoNombre123 = $_FILES["ComproD"]["name"];
            $archivoRuta = $target_file;
            $queryInsert123 = "INSERT INTO arch_alumno (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre123', '$archivoRuta')";
            
            if ($conn1->query($queryInsert123) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito123 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success123=1&message123=$archivoNombreExito123");
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


//--------------------------------- Documento ComproPC



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ComproPC"])) {
    $tipo_archivo133 = $_FILES["ComproPC"]["type"];
    $target_dir = "alumno/";
    $target_file = $target_dir . basename($_FILES["ComproPC"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo133 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["ComproPC"]["tmp_name"], $target_file)) {
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
            $archivoNombre133 = $_FILES["ComproPC"]["name"];
            $archivoRuta = $target_file;
            $queryInsert133 = "INSERT INTO arch_alumno (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre133', '$archivoRuta')";
            
            if ($conn1->query($queryInsert133) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito133 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success133=1&message133=$archivoNombreExito133");
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