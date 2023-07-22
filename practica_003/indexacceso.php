<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso restringido</title>
</head>
<body>
    <?php
        if(isset($_POST["usuario"]) and isset($_POST["password"])) {
            if($_POST["usuario"] == "" or $_POST["password"] == "") {
                echo "Ingrese su Usuario y su Password";
            }
            else {
                if($_POST["usuario"] == "Edgar" and $_POST["password"] == "123456") {
                    $_SESSION["usuario"]    = $_POST["usuario"];
                    $_SESSION["password"]   = $_POST["password"];
                    echo "Usted está logueado con el usuario : " . $_SESSION["usuario"];
                }
            }
        }
    ?>

    <div id="menu">
        <ul>
            <li><a href="primera.php">Primera página privada</a></li>
            <li><a href="segunda.php">Segunda página privada</a></li>
            <li><a href="tercera.php">Tercera página privada</a></li>
        </ul>
    </div>

    <h1>Por favor ingrese sus credenciales</h1>
    <form action="indexacceso.php" method="POST">
        <label for="usuario">Usuario : </label>
        <input type="text" name="usuario" id="usuario">
        <label for="password">Password : </label>
        <input type="text" name="password" id="password">
        <button type="submit">Ingresar</button>
    </form>    
</body>
</html>