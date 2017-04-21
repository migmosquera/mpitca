<?php
require_once 'model/Proyect.php';
$cant_proyect = 10;
$paginaContent = "";
if (isset($_GET['pagContent'])) {
    $paginaContent = (int) $_GET['pagContent'];
}
$proyect_total = Proyect::searchContent();
$columns = count($proyect_total);
$paginationContent = ceil($columns / $cant_proyect);
$url = $_SERVER['HTTP_HOST'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
if ($paginaContent == 1 || $paginaContent == "") {
    $inicio = 0;
    $paginaContent = 1;
} else {
    $inicio = ($paginaContent - 1) * $cant_proyect;
}
$offset = $paginaContent * $cant_proyect;
$paginationContent = ceil($columns / $cant_proyect);
$proyect = Proyect::paginationProyect($inicio, $cant_proyect);
