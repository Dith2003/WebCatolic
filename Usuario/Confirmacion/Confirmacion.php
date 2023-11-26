<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCatolic</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-size: 1.6rem;
        }

        td:last-child {
            text-align: center;
        }

        input[type="file"] {
            display: block;
        }

        .btn1 {
            display: inline-block;
            margin-top: 1rem;
            padding:.7rem 2rem;
            border-radius: .5rem;
            background:#333;
            color:#fff;
            cursor: pointer;
            font-size: 1.3rem;
        }

        p {
            margin: 0;
            font-size: 1.4rem;
        }

        @media only screen and (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            td:last-child {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <header>
        
            <a href="#" class="logo">Web<span>Catolic</span></a>
        

        
            <nav style="font-size: 1.8rem">
                <a href="../Alumno.php">Regresar</a>
            </nav>
        
        </header>

        <h1 class="heading">Subir Archivos</h1>
<!-- Datos del usuario despues del Inicio de Sesion -->
        <?php
            $nombreUsuario = "Nombre del Usuario";
            echo "<p style='text-align: center;'>Usuario: $nombreUsuario</p>";
        ?>
        
        <section class="review">
            <div class="box">
            <p>*En cada uno de los apartador solo podras subir archivos de tipo PDF o JPG.</p>
            <br>
<!-------------------------------------------- Tabla de documentos de los Padrinos  ------------------------------------------->

            <table>
                <tr>
                    <th style="text-aling: center;" colspan="3">Documentos de los Padrinos</th>
                </tr>
                <tr>
                    <td>
                        <p>Comprobante de Bautizo</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="padrinos.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="CB" id="CB" accept=".pdf .jpg" required>
                    </td>
                    <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar"> 
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                              
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success1']) && $_GET['success1'] == 1 && isset($_GET['message1'])) {
                                $archivoNombreExito1 = $_GET['message1'];
                                echo "<p style='text-align: center;'> $archivoNombreExito1</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Comprobante de Primera Comunion</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="padrinos.php" method="post" enctype="multipart/form-data">
                           <input type="file" name="cpc" id="cpc" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success2']) && $_GET['success2'] == 1 && isset($_GET['message2'])) {
                                $archivoNombreExito2 = $_GET['message2'];
                                echo "<p style='text-align: center;'> $archivoNombreExito2</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Comprobante de Confirmacion</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="padrinos.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="cc" id="cc" accept=".pdf, .jpg " required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success3']) && $_GET['success3'] == 1 && isset($_GET['message3'])) {
                                $archivoNombreExito3 = $_GET['message3'];
                                echo "<p style='text-align: center;'> $archivoNombreExito3</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Copia de INE</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="padrinos.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="ine" id="ine" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success4']) && $_GET['success4'] == 1 && isset($_GET['message4'])) {
                                $archivoNombreExito4 = $_GET['message4'];
                                echo "<p style='text-align: center;'> $archivoNombreExito4</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Acta de Matrimonio</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="padrinos.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="am" id="am" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success5']) && $_GET['success5'] == 1 && isset($_GET['message5'])) {
                                $archivoNombreExito5 = $_GET['message5'];
                                echo "<p style='text-align: center;'> $archivoNombreExito5</p>";
                            }
                        ?>
                    </td>
                </tr>
            </table>

        
        <br></br>


<!-------------------------------------------- Tabla de documentos del Tutor  ------------------------------------------->

            <table>
                <tr>
                    <th style="text-aling: center;" colspan="3">Documentos del Tutor</th>
                </tr>
                <tr>
                    <td>
                        <p>Copia del INE</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="tutorados.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="cin" id="cin" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success11']) && $_GET['success11'] == 1 && isset($_GET['message11'])) {
                                $archivoNombreExito11 = $_GET['message11'];
                                echo "<p style='text-align: center;'> $archivoNombreExito11/p>";
                            }
                        ?>
                    </td>
                </tr>
            </table>





            
        <br></br>


<!-------------------------------------------- Tabla de documentos del Alumno  ------------------------------------------->

            <table>
                <tr>
                    <th style="text-aling: center;" colspan="3">Documentos del Alumno</th>
                </tr>
                <tr>
                    <td>
                        <p>Acta de Nacimiento</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="alumno.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="ActM" id="ActM" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success113']) && $_GET['success113'] == 1 && isset($_GET['message113'])) {
                                $archivoNombreExito113 = $_GET['message113'];
                                echo "<p style='text-align: center;'> $archivoNombreExito113/p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Comprobante de Bautizo</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="alumno.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="ComproD" id="ComproD" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success123']) && $_GET['success123'] == 1 && isset($_GET['message123'])) {
                                $archivoNombreExito123 = $_GET['message123'];
                                echo "<p style='text-align: center;'> $archivoNombreExito123</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Comprobante de Primera Comunion</p> <!-- Documento -->
                    </td>
                    <td>
                        <!-- Input para seleccionar archivos -->
                        <form action="alumno.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="ComproPC" id="ComproPC" accept=".pdf, .jpg" required>
                        </td>
                        <td>
                            <!-- Botón para enviar -->
                            <input class="btn1" type="submit" value="Ver" name="">
                            <input class="btn1" type="submit" value="Eliminar">
                            <input class="btn1" type="submit" value="Enviar" name="submit">
                        </form>
                    </td>
                    <td>
                        <!-- Leyenda de éxito -->
                        <?php
                            if (isset($_GET['success133']) && $_GET['success133'] == 1 && isset($_GET['message133'])) {
                                $archivoNombreExito133 = $_GET['message133'];
                                echo "<p style='text-align: center;'> $archivoNombreExito133</p>";
                            }
                        ?>
                    </td>
                </tr>
            </table>


        </div>


        </section>
        
        <!-- footer section  -->
        
        <section class="footer">
        
            <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>
        
        </section>
        
        </div>
        
        <!-- custom js file link -->
        <script src="js/script.js"></script>
        
</body>
</html>