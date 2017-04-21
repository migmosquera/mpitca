<?php
require_once 'model/Title.php';
$cant_title = 4;
$pagina = "";
if (isset($_GET['pag'])) {
    $pagina = (int) $_GET['pag'];
}
$title_total = Title::allTitle();
$columns = count($title_total);
$pagination = ceil($columns / $cant_title);
$url = $_SERVER['HTTP_HOST'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
if ($pagina == 1 || $pagina == "") {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $cant_title;
}
$offset = $pagina * $cant_title;
$pagination = ceil($columns / $cant_title);
$titlePagination = Title::paginationTitle($inicio, $cant_title);

