<!DOCTYPE html>
<?php
    include_once 'controller/search_all_proyect.php';  
    include_once 'controller/search_content_proyect.php';  
    
?>
<html lang="en">

    <head>
        <title>MPITCA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- bootstrap-css -->
        <link href="static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--// bootstrap-css -->
        <!-- css -->
        <link rel="stylesheet" href="static/css/style.css" type="text/css" media="all" />
        <!--// css -->
        <!-- font-awesome icons -->
        <link href="static/css/font-awesome.css" rel="stylesheet">
        <script src="static/js/jquery-1.11.1.min.js"></script>
        <script src="static/js/bootstrap.js"></script>
        <link rel="stylesheet" href="static/css/proyecto.css" type="text/css" media="all" />
        
    </head>
    <body style="background-color: #133F54">
        <!-- banner -->
        <div class="banner banner_interno">
            <div class="header">
                <div class="container container_header">
                    <div class="header-left">
                        <div class="w3layouts-logo">
                            <h1>
                                <a class="logo_web" href="index.php"><img src="static/images/mpitca.png"  /></a>
                                <a class="logo_mobil" href="index.php"><img src="static/images/mpitca_mobile.png"  /></a>
                            </h1>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <nav class="navbar navbar-default top-nav">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a  href="index.php">Home</a></li>
                                    <li><a href="servicios.php" class="scroll">Servicios</a></li>
                                    <li><a href="beneficio.php" class="scroll">Beneficios</a></li>
                                    <li><a href="nosotros.php" class="scroll">Sobre Nosotros</a></li>	
                                    <li><a class="active" href="proyecto.php" class="scroll">Poyectos Realizados</a></li>
                                    <li><a href="contactenos.php" class="scroll">Contáctenos</a></li> 

                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>   
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>

        <div class="container_contac_me" >
            <div class="container_servicios">
                <div style="display: block">
                    <div class="linea_degradada_izquierda"></div>
                    <h3 class="title_serivicios" style="font-size: 21px">Proyectos Realizados</h3>	
                    <div class="linea_degradada_derecha"></div>
                </div>
               
                <div id="container_content_sub_proyect" class="container_content_sub_proyect">
                    <?php foreach ($title_total as $item): ?>
                        <div id="container_<?php echo $item['id'] ?>" class="container_proyectos">    
                                <h4 class="title_proyecto"><?php echo $item['name'] ?></h4>
                                <div id="" class="sub_container_proyect">
                                    <div class="container_imagen_proyecto">
                                        <img style="border-radius: 5px;" src="<?php echo $item['img_title'] ?>" />
                                    </div>
                                </div>
                                <button type="button" id="button_<?php echo $item['id'] ?>" class="text_more_info">Ver Información</button>
                        </div>
                    <?php endforeach; ?> 
                </div>
                <div class="labelHide container_proyect" id="container_content_proyect">
                </div>
            </div>
        </div>


        <!-- footer -->
        <div class="footer" style="margin-top: 25px;" >
            <div class="footer-top">
                <div class="container">
                    <div class="footer-grids" style="text-align: center; display: block;margin: 0 auto;">
                        <div class=" footer-grid" style="display: inline-block; width: 32%;float: left;">
                            <div class="footer-logo">
                                <h3><a href="index.php">MPIT</a></h3>
                            </div>
                        </div>
                        <div class=" footer-list" style="display: inline-block; width: 32%;float: left; text-align: left" >
                            <h3>Servicios</h3>
                            <ul>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Usuario Final</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Escritorio de Ayuda</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Soporte de Sitio</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Mantenimiento de Hardware</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Soporte de Infraestructura</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Gerencia del Ciclo de Vida de su Tecnología</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Seguridad</a></li>
                                <li style="font-size: 11px;"><i class="fa fa-arrow-right" aria-hidden="true"></i><a>Servicio de Consulta y Proyecto</a></li>
                            </ul>
                        </div>
                        <div class="agile-footer-grid" class="contact-footer">
                            <h3>Contactenos</h3>
                            <div id="contJormos"  style="color: #A7A5A5; cursor: pointer; margin-top: 15px;" ><a href="contactenos.php" class="footer_contact_me" >Jorge Mosquera</a></div>
                            <div id="contCharles"  style="color: #A7A5A5; cursor: pointer; margin-top: 15px;"><a href="contactenos.php" class="footer_contact_me" >Charles Chaderton</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="static/js/responsiveslides.min.js"></script>

        <script type="text/javascript" src="static/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="static/js/move-top.js"></script>
        <script type="text/javascript" src="static/js/easing.js"></script>
        <script type="text/javascript" src="static/js/aos.js"></script>
        <script type="text/javascript" src="static/js/proyecto.js"></script>
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //here ends scrolling icon -->
</body>	
</html>