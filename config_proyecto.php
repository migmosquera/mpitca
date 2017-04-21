<!DOCTYPE html>
<?php
include_once 'controller/save_title.php';
include_once 'controller/edit_title.php';
include_once 'controller/delete_title.php';  
include_once 'controller/search_title.php';  
include_once 'controller/save_content_proyect.php';
include_once 'controller/edit_content.php';
include_once 'controller/delete_content.php';
include_once 'controller/search_content.php';
?>
<html>
    <head>
        <title>MPITCA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta charset="UTF-8">
        <link rel="stylesheet" href="static/css/global_admin.css" type="text/css" media="all" />
    </head>
    <body style="background-color: #133F54">
        <?php include 'navbar_admin.php' ?>
        <section class="container_section">
            <div class="container_content_config">
                <p class="title">Configuración de Titulos de Proyectos</p>
                <div class="sub_container_config">
                    <form method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" id="idTitle" name="idTitle" />
                        <p><strong>Registrar Título de Proyectos</strong></p>
                        <input type="text" placeholder="Nombre del Titulo" name="textNameTitle" id="textNameTitle" style="width: 250px;margin-bottom: 10px;" required/>
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
                        <p class="msj_proyect" id="msjTitle"><?php echo $msjSaveTitle ; ?></p>
                        <input type="submit" name="btnGuardarTitulo" id="btnGuardarTitulo" value="Guardar">
                        <input type="submit" name="btnEditarTitulo" id="btnEditarTitulo" value="Editar" class="label_hide">
                        <input type="button" name="btnEliminarTitulo" id="btnEliminarTitulo" value="Eliminar" class="label_hide">
                        <input type="button" name="btnCancelarTitulo" id="btnCancelarTitulo" class="btn_cancelar_titulo label_hide" value="Cancelar" >
                    </form>
                </div>
                <hr class="separador" width=75%/>
                <div class="sub_container_config" style="">
                    <p><strong>Lista de Títulos de Proyectos</strong></p>
                    <div class="container_all_title">
                        <?php foreach ($titlePagination as $item): ?>
                        <div id="containerPhoto_<?php echo $item['id'] ?>" class="container_title_proyect" title="<?php echo $item['name'] ?>" lang="<?php echo $item['img_title'] ?>" align="<?php echo $item['img_title'] ?>">
                                <p id="name_<?php echo $item['name'] ?>" class="text_title_proyect"><?php echo $item['name'] ?></p>
                                <img id="imagenUser_<?php echo $item['id'] ?>" class="img_title_proyect" src=" <?php echo $item['img_title'] ?>" alt="" />
                            </div>

                        <?php endforeach; ?> 
                    </div>
                    <?php
                        if ($pagina != 1)
                            echo '<a style="border-bottom: 0" href="?pag=' . ($pagina - 1) . '"> < </a>';
                        for ($i = 0; $i < $pagination; $i++) {
                            $pagina_texto = $i + 1;
                            $clase = "";

                            if ($pagina == $pagina_texto)
                                $clase = 'active';
                            echo '<a class="pagination ' . $clase . ' " href="?pag=' . $pagina_texto . '">' . $pagina_texto . '</a>';
                        }
                        if ($pagina != $pagination)
                            echo '<a style="border-bottom: 0" href="?pag=' . ($pagina + 1) . '"> > </a>';
                    ?>    
                </div>
            </div>
            <div  class="container_content_config">
                <p class="title">Configuración de Proyectos</p>
                <div class="sub_container_config">
                    <form method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="container_title_content_proyect">
                            <input type="hidden" id="idProyect" name="idProyect" />
                            <input type="text" name="name_company" id="name_company" placeholder="Ingrese el Nombre de la compañia" class="text_name_company" required/>
                            <select id="title_proyect" name="title_proyect" style="height: 29px;" required>
                                <option value="" >Seleccione un Título</option>
                                <?php foreach ($title_total as $item): ?>
                                    <option id="<?php echo $item['id'] ?>" value="<?php echo $item['id'] ?>" ><?php echo $item['name'] ?></option>
                                <?php endforeach; ?> 
                            </select>
                        </div>
                        <textarea name="tinymce" class="tinymce" style="width: 90%;margin: 0 auto;"></textarea>
                        <div id="container_delete_content" class="container_delete_title label_hide">
                            <p style="margin-top: 10px;">Deseas Eliminar el Proyecto</p>
                            <p id="nameCompanyDelete" name="nameCompanyDelete"></p>
                            <input value="SI" id="deleteProyect" name="deleteProyect" type="submit" class="button_delete">
                            <p class="button_not_delete btn_cancelar_content" id="notDeleteContent">NO</p>
                        </div>
                        <p class="msj_proyect" id="msjTitle"><?php echo $msjSaveContent ; ?></p>
                        <div class="container_button">
                            <input type="submit" value="Guardar" id="btnSaveContent" name="btnSaveContent"/>
                            <input type="submit" name="btnEditarContent" id="btnEditarContent" value="Editar" class="label_hide">
                            <input type="button" name="btnEliminarContent" id="btnEliminarContent" value="Eliminar" class="label_hide">
                            <input type="button" name="btnCancelarContent" id="btnCancelarContent" class="btn_cancelar_content label_hide" value="Cancelar" >
                        </div>
                    </form>
                </div>
                <hr class="separador" width=75%/>
                <div class="sub_container_config" style="">
                    <p><strong>Lista de Proyectos</strong></p>
                    <div class="container_content_content_proyect">
                        <?php foreach ($proyect as $item): ?>
                            <div id="containerContent_<?php echo $item['id'] ?>" class="container_content_proyect" title="<?php echo $item['content_proyect'] ?>" lang="<?php echo $item['name_company'] ?>" align="<?php echo $item['id_title'] ?>">
                                <p style="width: 84%; display: inline-block;"><?php echo $item['name_company'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php
                        if ($paginaContent != 1)
                            echo '<a style="border-bottom: 0" href="?pagContent=' . ($pagina - 1) . '"> < </a>';
                        for ($i = 0; $i < $paginationContent; $i++) {
                            $pagina_texto = $i + 1;
                            $clase = "";

                            if ($paginaContent == $pagina_texto)
                                $clase = 'active';
                            echo '<a class="pagination ' . $clase . ' " href="?pagContent=' . $pagina_texto . '">' . $pagina_texto . '</a>';
                        }
                        if ($paginaContent != $paginationContent)
                            echo '<a style="border-bottom: 0" href="?pagContent=' . ($pagina + 1) . '"> > </a>';
                    ?>  
                </div>
            </div>
        </section>
    <script type="text/javascript" src="static/js/config_proyecto.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=yliivq26qrkopuau1pn5tl7cilixbqgvi8iiotfm4w2511u7"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    </body>
</html>
