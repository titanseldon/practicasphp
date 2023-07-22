<?php
    $nombreArchivo  = "librosfisica.txt";
    $librosFisica   = file($nombreArchivo);

    function actualizarArchivo($lineaTexto, $identificadorTema) {
        global $nombreArchivo;
        global $librosFisica;

        if($identificadorTema == "b") {
            $fileFisica = fopen($nombreArchivo, "a");
            if(fputs($fileFisica, "\n" . $lineaTexto)) {
                echo "<p>!!! Libro guardado !!!</p>";             
            }
            else {
                echo "<p>!!! Error al guardar el libro !!!</p>";
            }
            fclose($fileFisica);
        }
        $librosFisica = file($nombreArchivo);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta a tema</title>
</head>
<body>
    <h1>TEMA SELECCIONADO</h1>
    <?php
        echo "<h2>" . $_POST["tema"] . "</h2>";
        if($_POST["titulo"] != "") {
            echo "<h2>" . $_POST["titulo"] . "</h2>";
            actualizarArchivo($_POST["titulo"], $_POST["tema"]);
        }
        if($_POST["tema"] == "b") {
            $cantidadLibros = count($librosFisica);
            echo "<h2>LISTADO DE LIBROS DE FÍSICA</h2>";
            echo "Cantidad de libros : " . $cantidadLibros;
            echo '<table border="3" align="center" bordercolor="#CCFF00">';
            for($i = 0; $i < $cantidadLibros; $i++) {
                echo "<tr>";
                    echo "<td>";
                        echo $librosFisica[$i];
                    echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>