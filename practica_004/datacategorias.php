<?php
    $dataCategorias = array(
                                array(1, 1225, "Artículos de la industria electrónica"),
                                array(2, 584, "Componentes electrónicos construidos con tecnología de estado solido"),
                                array(3, 123, "Procesadores"),
                                array(4, 10, "Procesadores producidos por la empresa AMD"),
                            );
                            
    $identificador_categoria = $_GET["identificador"];
    $nombre_categoria = $_GET["nombre"];
    var_dump($identificador_categoria);
    var_dump($nombre_categoria);   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información por categoría</title>
</head>
<body>
    <h1>INFORMACIÓN PARA LA CATEGORÍA : <?php echo $nombre_categoria ?></h1>
    <h3>Descripción</h3>
    <p><?php echo $dataCategorias[$identificador_categoria - 1][2] ?></p>
    <h3>Cantidad en inventario</h3>
    <p><?php echo $dataCategorias[$identificador_categoria - 1][1] ?></p>
</body>
</html>