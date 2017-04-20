<?php
$msjSaveContent = '';
if (isset($_POST['btnEditarContent'])) {
   require_once 'model/Proyect.php';
   $id = $_POST['idProyect'];
   $name_company = $_POST['name_company'];
   $content = $_POST['tinymce'];
   $id_title = $_POST['title_proyect'];
   $edit_proyecto = Proyect::editContent($id, $content, $id_title, $name_company);
   $msjSaveContent = 'El proyecto ha sido editado';
}