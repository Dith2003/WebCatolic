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
$query1 = "SELECT * FROM arch_padrinos";
$result1 = $conn1->query($query1);

// Consulta en la segunda base de datos
$query2 = "SELECT * FROM usuarios";
$result2 = $conn1->query($query2);





// -------------------------- Documento CB




// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["CB"])) {
    $tipo_archivo1 = $_FILES["CB"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["CB"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo1 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["CB"]["tmp_name"], $target_file)) {
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
            $archivoNombre1 = $_FILES["CB"]["name"];
            $archivoRuta = $target_file;
            $queryInsert1 = "INSERT INTO arch_padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre1', '$archivoRuta')";
            
            if ($conn1->query($queryInsert1) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito1 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success1=1&message1=$archivoNombreExito1");
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



//--------------------------------- Documento cpc



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["cpc"])) {
    $tipo_archivo2 = $_FILES["cpc"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["cpc"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo2 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["cpc"]["tmp_name"], $target_file)) {
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
            $archivoNombre2 = $_FILES["cpc"]["name"];
            $archivoRuta = $target_file;
            $queryInsert2 = "INSERT INTO arch_padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre2', '$archivoRuta')";
            
            if ($conn1->query($queryInsert2) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito2 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success2=1&message2=$archivoNombreExito2");
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


//--------------------------------- Documento cc



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["cc"])) {
    $tipo_archivo3 = $_FILES["cc"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["cc"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo3 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["cc"]["tmp_name"], $target_file)) {
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
            $archivoNombre3 = $_FILES["cc"]["name"];
            $archivoRuta = $target_file;
            $queryInsert3 = "INSERT INTO arch_padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre3', '$archivoRuta')";
            
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
        echo "Solo se permiten archivos PDF o JPG";
    }
}



//--------------------------------- Documento ine



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["ine"])) {
    $tipo_archivo4 = $_FILES["ine"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["ine"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo4 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["ine"]["tmp_name"], $target_file)) {
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
            $archivoNombre4 = $_FILES["ine"]["name"];
            $archivoRuta = $target_file;
            $queryInsert4 = "INSERT INTO arch_padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre3', '$archivoRuta')";
            
            if ($conn1->query($queryInsert4) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito4 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success4=1&message4=$archivoNombreExito4");
                exit();
            } else {
                echo "Error al insertar en la base de datos: " . $conn1->error;
            }
        } else {
            // Mensaje de error al subir el archivo.
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Solo se permiten archivos PDF o JPG.";
    }
}



//--------------------------------- Documento Bolt5



// Lógica para subir el archivo y guardar la información en la base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["am"])) {
    $tipo_archivo5 = $_FILES["am"]["type"];
    $target_dir = "padrinos/";
    $target_file = $target_dir . basename($_FILES["am"]["name"]);
    $uploadOk = 1;

    if ($tipo_archivo5 == "application/pdf") {
        // Validaciones
        if (move_uploaded_file($_FILES["am"]["tmp_name"], $target_file)) {
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
            $archivoNombre5 = $_FILES["am"]["name"];
            $archivoRuta = $target_file;
            $queryInsert5 = "INSERT INTO arch_padrinos (usuario_id, archivo_nombre, archivo_ruta) VALUES ($usuarioId, '$archivoNombre5', '$archivoRuta')";
            
            if ($conn1->query($queryInsert5) === TRUE) {
                // Mensaje de éxito
                $archivoNombreExito5 = "El archivo fue correctamente enviado";

                // Redireccion a la página principal con un mensaje de éxito.
                header("Location: index.php?success5=1&message5=$archivoNombreExito5");
                exit();
            } else {
                echo "Error al insertar en la base de datos: " . $conn1->error;
            }
        } else {
            // Mensaje de error al subir el archivo.
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "Solo se permiten archivos PDF o JPG.";
    }
}



// Cerrar conexiones
$conn1->close();
?>
