<?php
$tablaCategoriasTorneo = array(
                            array(1, "Colombia"),
                            array(2, "Fútbol"),
                            array(3, "Sub 20"),
                            array(4, "Mujeres"),
                            array(5, "Fechas")
                        );

$categoriaElectronica_1 = array(1, "Componentes Electrónicos");
$categoriaElectronica_2 = array(2, "Semiconductores");
$categoriaElectronica_3 = array(3, "Transistores");
$categoriaElectronica_4 = array(4, "FET's");
$categoriaElectronica_5 = array(5, "Canal N");
$tablaCategoriasElectronica = array(
                        $categoriaElectronica_1,
                        $categoriaElectronica_2,
                        $categoriaElectronica_3,
                        $categoriaElectronica_4,
                        $categoriaElectronica_5
                    );

$tablaCategoriasLibros  = array();
$categoriaLibros        = array();
$codigoCategoria = 1;
$nombreCategoria = "Técnicos";
array_push($categoriaLibros, $codigoCategoria, $nombreCategoria);
array_push($tablaCategoriasLibros, $categoriaLibros);
array_pop($categoriaLibros);
array_pop($categoriaLibros);
array_push($categoriaLibros, 2, "Ingenierías");
array_push($tablaCategoriasLibros, $categoriaLibros);
array_pop($categoriaLibros);
array_pop($categoriaLibros);
array_push($categoriaLibros, 3, "Electrónica");
array_push($tablaCategoriasLibros, $categoriaLibros);
array_pop($categoriaLibros);
array_pop($categoriaLibros);
array_push($categoriaLibros, 4, "Digital");
array_push($tablaCategoriasLibros, $categoriaLibros);
array_pop($categoriaLibros);
array_pop($categoriaLibros);
array_push($categoriaLibros, 5, "Morris Mano");
?>