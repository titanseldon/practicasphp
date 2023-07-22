<?php
//    $animales = array("Perro", "Gato", "Tigre",  "León", "Cucaracha", "Rata de dos patas", "Caimán");

    $animales[0]    = "Perro";
    $animales[1]    = "Gato";
    $animales[2]    = "Tigre";
    $animales[3]    = "León";
    $animales[4]    = "Cucaracha";
    $animales[5]    = "Rata de dos patas";
    $animales[6]    = "Caiman";
    $animales[7]    = "Tiburón";

    echo '<h1>LISTA CON EL FOREACH</h1>';
    foreach($animales as $animal) {
        echo '<h4>' . $animal . '</h4>';
    }

    $cantidad = count($animales);
    echo '<h1>LISTA CON EL BUCLE FOR</h1>';
    for($i = 0; $i < $cantidad; $i++) {
        echo '<h4>' . $animales[$i] . '</h4>';
    }
?>