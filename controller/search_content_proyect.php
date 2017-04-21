<?php

if (isset($_POST['id'])) {
    require_once '../connect/conection.php';
    $id = $_POST['id'];
    $conectar = new Conection();
    $query = $conectar->prepare('SELECT * FROM content_proyect Where id_title=:id');
    $query->bindParam(':id', $id);
    $query->execute();
    $data = $query ->fetchAll();
    if ($data) {
        
        print_r(json_encode($data));
       
    } else {
        echo 'No trae Nada';
        return FALSE;
    }
    $conectar = null;
    
}
