<?php
class MigaDePan {

private $datos;
private $url = "";
private $separador = " » ";
private $listaHtml = "";
private $cadenaMigaDePan = "";

public function generarListaHtml() {
    foreach($this->datos as $filaDatos) {
        $this->listaHtml .= $filaDatos[1] . $this->separador;
    }
}

public function getListaHtml() {
    return $this->listaHtml;
}

public function generarCadenaMigaDePanHtml() {
    foreach($this->datos as $item) {
        $this->cadenaMigaDePan .= '<li class="breadcrumbs_item"><a href="' . $this->url . '?identificador=' . $item[0] . '&nombre=' . $item[1] . '" class="breadcrumbs_link">' . $item[1] . '</a></li> »';
    }
}

public function getCadenaMigaDePan() {
    return $this->cadenaMigaDePan;
}

public function setUrl($url) {
    $this->url = $url;
}

public function getUrl() {
    return $this->url;
}

public function setDatos($datos) {
    $this->datos = $datos;
}

public function getDatos() {
    return $this->datos;
}
}
?>