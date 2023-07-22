<?php
    session_start();
    var_dump($_SESSION);
/*     if(ini_get("session.use_cookies") == true) {
        $parametros = session_get_cookie_params();
        setcookie(session_name(), '', time() - 99999, $parametros["path"], $parametros["domain"], $parametros["secure"], $parametros["httponly"]);
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'Hola, su perfil es : ' . $_SESSION["perfil"]; ?>
</body>
</html>