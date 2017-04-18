<!DOCTYPE html>
<?php
include_once 'controller/save_title.php';
include_once 'controller/edit_title.php';
include_once 'controller/delete_title.php';  
include_once 'controller/search_title.php';  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="static/css/global_admin.css" type="text/css" media="all" />
    </head>
    <body style="background-color: #133F54">
        <?php include 'navbar_admin.php' ?>
        <section class="container_section">
            <div class="container_content_config">
                <div class="sub_container_config">
                    <form method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" id="idTitle" name="idTitle" />
                        <p><strong>Registrar Título de Proyectos</strong></p>
                        <input type="text" placeholder="Nombre del Titulo" name="textNameTitle" id="textNameTitle" style="width: 250px;margin-bottom: 10px;" />
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                        <p id="imageContainer" class="imagenContainer" ></p>
                        <input type="file" id="imgTitle" name="imgTitle"  style="margin: 0 auto" >
                        <div id="container_delete" class="container_delete_title label_hide">
                            <input value="SI" id="srcImgDelete" name="srcImgDelete" type="hidden" class="label_hide">
                            <p style="margin-top: 10px;">Deseas Eliminar el Título</p>
                            <p id="titleDelete" style="margin-bottom:35px"></p>
                            <input value="SI" id="delete" name="delete" type="submit" class="button_delete">
                            <p class="button_not_delete btn_cancelar_titulo" id="notDelete">NO</p>
                        </div>
                        <p style="color: green" id="msjTitle"><?php echo $msjSaveTitle ; ?></p>
                        <input type="submit" name="btnGuardarTitulo" id="btnGuardarTitulo" value="Guardar">
                        <input type="submit" name="btnEditarTitulo" id="btnEditarTitulo" value="Editar" class="label_hide">
                        <input type="button" name="btnEliminarTitulo" id="btnEliminarTitulo" value="Eliminar" class="label_hide">
                        <input type="button" name="btnCancelarTitulo" id="btnCancelarTitulo" class="btn_cancelar_titulo label_hide" value="Cancelar" >
                    </form>
                </div>
                <div class="sub_container_config" style="">
                    <p><strong>Lista de Títulos de Proyectos</strong></p>
                    <?php foreach ($title as $item): ?>
                    <div id="containerPhoto_<?php echo $item['id'] ?>" class="container_title_proyect" title="<?php echo $item['name'] ?>" lang="<?php echo $item['img_title'] ?>" align="<?php echo $item['img_title'] ?>">
                            <p id="name_<?php echo $item['name'] ?>" style="width: 84%; display: inline-block;"><?php echo $item['name'] ?></p>
                            <img id="imagenUser_<?php echo $item['id'] ?>" style="width: 65px; display: inline-block;height: 48px;" src=" <?php echo $item['img_title'] ?>" alt="" />
                        </div>

                    <?php endforeach; ?> 
                        
                </div>
            </div>
        </section>
    <script type="text/javascript" src="static/js/config_proyecto.js"></script>    
    </body>
</html>
