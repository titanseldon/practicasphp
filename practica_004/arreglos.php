<?php
include("./arreglo_categorias.php");
include("./class_migadepan.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica con arreglos</title>
    <style>
        .breadcrumbs {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .breadcrumbs_item {
            display: inline-block;
        }
    </style>    
</head>
<body>
    <h1>PRÁCTICA CON ARREGLOS</h1>
    <?php
        $migaDePanCategorias = new MigaDePan();
        $migaDePanCategorias->setDatos($tablaCategoriasLibros);
        $migaDePanCategorias->setUrl("datacategorias.php");
        $migaDePanCategorias->generarListaHtml();
        $migaDePanCategorias->generarCadenaMigaDePanHtml();
        echo $migaDePanCategorias->getListaHtml();
    ?>
    <ul class="breadcrumbs">
    <?php
        echo $migaDePanCategorias->getCadenaMigaDePan();
    ?>
    </ul>    
</body>
</html>