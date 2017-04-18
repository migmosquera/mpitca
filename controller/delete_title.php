<?php
$msjSaveTitle = '';
if (isset($_POST['delete'])) {
  
    require_once 'model/Title.php';
    $id = $_POST['idTitle'];
    $img_url = $_POST['srcImgDelete'];
    $title_delete = Title::deleteTitle($id, $img_url);
    $msjSaveTitle = 'El titulo se ha borrado';    
}
