<!DOCTYPE html>
<?php
include_once 'controller/save_title.php';   
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
                    <form method="post" accept-charset="utf-8">
                        <p>Registrar Título de Proyectos</p>
                        <input type="text" placeholder="Nombre del Titulo" name="textNameTitle" id="textNameTitle" />
                        <input type="file" id="imgTitle" name="imgTitle" style="margin: 0 auto" >
                        <p><?php echo $msjSaveTitle ; ?></p>
                        <input type="submit" name="btnGuardarTitulo" id="btnGuardarTitulo" value="Guardar">
                    </form>
                </div>
                <div class="sub_container_config">
                    <p>Lista de Títulos de Proyectos</p>
                    <?php  if ($data_title == '') { ?>
                        <p><?php echo $msjEmpty; ?></p>
                    <?php } ?>
                        
                </div>
            </div>
        </section>
    <script type="text/javascript" src="static/js/config_proyecto.js"></script>    
    </body>
</html>
