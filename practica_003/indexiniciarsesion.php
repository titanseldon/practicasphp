<?php
    session_start();
    $identificador = session_id();
    $_SESSION["perfil"] = "inversionista";
    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicar sesión</title>
</head>
<body>
    <?php
        echo "El identificador de esta sesión es : $identificador<br>";
        echo "Bienvenido Sr. " . $_SESSION["perfil"];
    ?>

    <p><a href="pagina2.php">Siguiente Página</a></p>
    <!-- <p><a href="pagina2.php?<?php echo session_name(); ?>=<?php echo session_id(); ?>">Siguiente Página</a></p> -->
</body>
</html>