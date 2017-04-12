<?php
require_once 'model/Title.php';
$title = Title::searchTitle();
$data_title = implode(",", $title);
if ($data_title == ''){
    $msjEmpty = 'no hay titulos registrado';
}
