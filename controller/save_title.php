<?php
$msjSaveTitle = '';
if (isset($_POST['btnGuardarTitulo'])) {
    require_once 'model/Title.php';
    $temp = tmpfile();
    $dir_subida = 'upload/';
    $target_file = $dir_subida . basename($_FILES["imgTitle"]["name"]);
    $nameTitle = $_POST['textNameTitle'];
    $img = $_FILES["imgTitle"]["name"];
    
    $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if ($fileType == 'jpg' or $fileType == 'png') {
        if (move_uploaded_file($_FILES['imgTitle']['tmp_name'], $target_file)) {
            $msjSaveTitle = "el titulo se ha guardado";
            $img_url = 'upload/' . basename($_FILES["imgTitle"]["name"]);
            $title_save = Title::registerTitle($nameTitle, $img_url);
        } else {
            $msjSaveTitle = 'Error al subir la imagen';
            echo $_FILES['imgTitle']['error'];
        }
    } else {
        $msjSaveTitle = 'Error al subir imagen solo se permite jpg y png';
    }
}