<!DOCTYPE html>
<?php
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
        <link rel="stylesheet" href="static/css/beneficios.css" type="text/css" media="all" />
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
                    <div class="top-nav">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                                    <li><a  href="servicios.php" class="scroll">Servicios</a></li>
                                    <li><a class="active" href="beneficio.php" class="scroll">Beneficios</a></li>
                                    <li><a href="nosotros.php" class="scroll">Sobre Nosotros</a></li>	
                                    <li><a href="proyecto.php" class="scroll">Poyectos Realizados</a></li>
                                    <li><a href="contactenos.php" class="scroll">Contactenos</a></li>
                                </ul>
                                <div class="clearfix"> </div>							
                            </div>	
                        </nav>		
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>

        <div class="container_contac_me" >
            <div class="container_servicios">
                <div style="display: block">
                    <div class="linea_degradada_izquierda"></div>
                    <h3 class="title_serivicios"  >Beneficios al Cliente</h3>	
                    <div class="linea_degradada_derecha"></div>
                </div>
                <div id="servicesUser" class="container_content_services" >
                    <div  class="container_beneficio">
                        <img style="width: 100%; height: 195px" src="static/images/consultor.png">
                        <p class="title_beneficios" >Objetividad e Independencia</p>
                        <div class="container_more_info"><p id="more_InfoObjetividad" class="more_info_beneficios  button_more_info">Mas Info</p></div>
                    </div>
                    <div class="container_beneficio">
                        <img style="width: 100%; height: 195px" src="static/images/insfraestructura.jpg">
                        <p class="title_beneficios" >Servicios Integral</p>
                        <div class="container_more_info"><p id="more_InfoServicios" class="more_info_beneficios button_more_info">Mas Info</p></div>
                    </div>
                    <div class="container_beneficio">
                        <img style="width: 100%; height: 195px" src="static/images/business-idea.jpg">
                        <p class="title_beneficios" >Experiencia en Gerencia y Calidad de Servicio</p>
                        <div class="container_more_info"><p id="more_InfoGerencia" class="more_info_beneficios button_more_info">Mas Info</p></div>
                    </div>
                    <div class="container_beneficio">
                        <img style="width: 100%; height: 195px" src="static/images/man.jpg">
                        <p class="title_beneficios" >Servicios Personalizados</p>
                        <div class="container_more_info"><p id="more_InfoPersonalizados" class="more_info_beneficios button_more_info">Mas Info</p></div>
                    </div>
                    <div class="container_beneficio">
                        <img style="width: 100%; height: 195px" src="static/images/nivel_servicio.jpg">
                        <p class="title_beneficios" >Acuerdo de Niveles de Servicios(ANS)</p>
                        <div class="container_more_info"><p id="more_InfoAns" class="more_info_beneficios button_more_info">Mas Info</p></div>
                    </div>
                </div>
                
                <div id="container_InfoObjetividad" class="container_text_beneficio showDiv" >
                    <div class="imagen_background_beneficios" style=" background-image: url('static/images/consultorIndependiente.jpg');"></div>
                    
                    <div class="container_text_con_beneficios"> 
                        <p class="title_beneficios_responsive" >Objetividad e Independencia</p>
                        MPIT no está ligada a ningún fabricante, operador ni empresa instaladora, lo que nos permite garantizar la objetividad 
                        a la hora de seleccionar aquellos servicios o sistemas que se ajustan mejor a las necesidades concretas de la 
                        empresa</div>
                </div>
                <div id="container_InfoServicios" class="container_text_beneficio hideDiv" >
                    <div class="imagen_background_beneficios" style=" background-image: url('static/images/redesSistemasInfratestructra.jpg');"></div>
                    
                    <div class="container_text_con_beneficios">
                        <p class="title_beneficios_responsive" >Servicios Integral</p>
                        Nuestro servicio abarca un amplio en lo concerniente a infraestructura, redes y sistemas.
                    </div>
                </div>
                <div id="container_InfoGerencia" class="container_text_beneficio hideDiv" >
                    <div class="imagen_background_beneficios" style=" background-image: url('static/images/Reunion-Trabajo.jpg');"></div>
                    
                    <div class="container_text_con_beneficios">
                        <p class="title_beneficios_responsive" >Experiencia en Gerencia y Calidad de Servicio</p>
                        Profundos conocimientos en elaboración de propuesta, evaluación y gerencia de proyectos, hacen que los productos
                        ofrecidos sean de una altísima calidad, asegurado la satisfacción de nuestro clientes.
                    </div>
                </div>
                <div id="container_InfoPersonalizados" class="container_text_beneficio hideDiv" >
                    <div class="imagen_background_beneficios" style=" background-image: url('static/images/servicio_tecnico.jpg');"></div>
                    
                    <div class="container_text_con_beneficios">
                        <p class="title_beneficios_responsive" >Servicios Personalizados</p>
                    La naturaleza, el grado de desarrollo tecnológico y las necesidades de cada empresa hacen preciso realizar estudios y 
                    servicios personalizados y a la medida para cada cliente, y en eso consiste nuestro trabajo.
                    </div>
                </div>
                <div id="container_InfoAns" class="container_text_beneficio hideDiv" >
                    <div class="imagen_background_beneficios" style=" background-image: url('static/images/nivelServicios.jpg');"></div>
                    
                    <div class="container_text_con_beneficios">
                        <p class="title_beneficios_responsive" >Acuerdo de Niveles de Servicios(ANS)</p>
                        Una de nuestro diferenciadores es nuestra experiencia en la Gerencia de Servicios. 
                        Mediante el establecimiento de acuerdo de niveles de servicios medibles, 
                        el cliente puede hacer seguimientos del comportamiento y calidad del servicio prestado, 
                        por las cuales se pueden tomar decisiones para mantener una mejora continúa del servicio prestado.
                    </div>
                </div>
                <div style="height: 30px;"></div>
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


        <script type="text/javascript" src="static/js/move-top.js"></script>
        <script type="text/javascript" src="static/js/easing.js"></script>
        <script type="text/javascript" src="static/js/aos.js"></script>
        <script type="text/javascript" src="static/js/beneficios.js"></script>
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