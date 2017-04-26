<?php

if (isset($_POST['deleteProyect'])) {
    require_once 'model/Proyect.php';
    $id = $_POST['idProyect'];
    echo $id;
    $title_delete = Proyect::deleteContent($id);
    $msjSaveContent = 'El Contenido se ha borrado';    
}

