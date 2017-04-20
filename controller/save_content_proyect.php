<?php
$msjSaveContent = '';
if (isset($_POST['save_content_proyect'])) {
   require_once 'model/Proyect.php';
   $name_company = $_POST['name_company'];
   $content = $_POST['tinymce'];
   $id_title = $_POST['title_proyect'];
   $content_save = Proyect::registerContent($content, $id_title, $name_company);
   if ($content_save == TRUE){
       $msjSaveContent = 'El proyecto se ha guardado de manera exitosa';
   }else{
       $msjSaveContent = 'Error al guardar el proyecto';
   }
}
