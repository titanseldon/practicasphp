<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera página privada</title>
</head>
<body>
    <?php
        if(isset($_SESSION["usuario"]) and $_SESSION["usuario"] <> "") {
            echo '<h3>Bienvenido usuario : ' . $_SESSION["usuario"] . '</h3>';
    ?>
    <h3>Esta información es exclusiva para usted.</h3>
    <?php
        }
        else
        {
    ?>        
            <p>Usted no ha iniciado sesión</p>
    <?php        
        }
    ?>   
</body>
</html>