<?php
    if(!isset($_COOKIE["nombre_usuario"]))
    {
        setcookie("nombre_usuario", "Kira Tarcicia");
        setcookie("nombre_perro", "Titan Seldon");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas con Cookies</title>
</head>
<body>
    <h1>PRUEBAS CON COOKIES</h1>
    <?php
        if(isset($_COOKIE["nombre_usuario"]))
        {
            echo "<p>Un saludo " . $_COOKIE["nombre_usuario"] . " gracias por visitarnos.</p>";
        }else {
            echo "<p>Un saludo. Gracias por visitarnos.</p>";
        }
    ?>
</body>
</html>