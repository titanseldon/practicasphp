<?php
    $temas          = array("Química", "Física", "Filosofía", "Antropología", "Matemáticas", "Geografía", "Historia");
    $valueTema      = array("a", "b", "c", "d", "e", "f", "g");
    $nombreArchivo  = "temas.txt";
    $temasUp        = file($nombreArchivo);
    $nombreJson     = "temas.json";
    $temasJsonUp    = file_get_contents($nombreJson);
    $temasJson      = json_decode($temasJsonUp, true);
    //var_dump($temasJson);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de temas</title>
</head>
<body>
    <h2>SELECCIONE EL TEMA DE LA LISTA DESPLEGABLE</h2>
    <form action="detectarTema.php" method="POST">
        <select name="tema" id="tema" size="5">
            <?php
                //La data de temas está en un arreglo proveniente de un archivo texto.
/*                 echo '<option value="0" selected="selected">Química</option>';
                $cantidadTemas = count($temasUp);
                for($i = 1; $i < $cantidadTemas; $i++) {
                    echo '<option value="' . $i . '">' . $temasUp[$i] . '</option>';
                }
 */                
                //La data de temas está en un arreglo proveniente de un archivo Json.
                echo '<option value="' . $temasJson[0]["value"] . '" selected="selected">' . $temasJson[0]["tema"] . '</option>';
                $cantidadTemas = count($temasJson);
                for($i = 1; $i < $cantidadTemas; $i++) {
                    echo '<option value="' . $temasJson[$i]["value"] . '">' . $temasJson[$i]["tema"] . '</option>';
                }
            ?>
        </select>
        <input type="text" name="titulo" id="titulo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>