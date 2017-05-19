<!DOCTYPE html>
<?php
    require_once  'controller/send_email.php';
    include_once 'controller/search_all_proyect.php';  
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
        <link rel="stylesheet" href="static/css/contactenos.css" type="text/css" media="all" />
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
                                    <li><a href="proyecto.php" class="scroll">Proyectos Realizados</a></li>
                                    <li><a class="active" href="contactenos.php" class="scroll">Contáctenos</a></li> 

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
                    <h3 class="title_serivicios"  >Contactenos</h3>	
                    <div class="linea_degradada_derecha"></div>
                </div>
                <div class="content_form">
                    <p class="msj_send_email" style=""><?php echo $msjSendEmail; ?></p>
                    <div class="content_right">
                        <p>Aquí podrás perdí cotizaciones o hacernos cualquier pregunta. En brevedad les responderemos cualquier duda, cotización o pregunta que realices.</p>
                       
                        <form action="" method="post" accept-charset="utf-8">
                            <select id="title_contact" name="title_contact" class="input_form select_form" required>
                                <option value="" >Indique el servicio a contactar</option>
                                <?php foreach ($title_total as $item): ?>
                                    <option id="<?php echo $item['id'] ?>" value="<?php echo $item['name'] ?>" ><?php echo $item['name'] ?></option>
                                <?php endforeach; ?> 
                                    <option value="0">Otro</option>    
                            </select>
                            <label id="labelErrorTitle" class="labelError labelHide"></label>
                            <input type="text" id="name_contact" name="name_contact" placeholder="Ingrese el Nombre y Apellido" class="input_form" required>
                            <label id="labelErrorName" class="labelError labelHide"></label>
                            <input type="text" id="email_contact" name="email_contact" placeholder="Ingrese su Correo Electrónico" class="input_form" required>
                            <label id="errorMail" class="labelError labelHide"></label>
                            <input type="text" id="tel_contact" name="tel_contact" placeholder="Ingrese su Teléfono" class="input_form" required>
                            <label id="labelErrorPhone" class="labelHide labelError"></label>
                            <textarea placeholder="Ingrese el Contenido" id="content_contact" name="content_contact" class="text_area_form" required></textarea>
                            <label id="labelErrorComment" class="labelHide labelError"></label>
                            <p class="msj_send_email">Para enviar el correo debe de llenar todos los campos</p>
                            <input type="submit" id="sendEmail"  name="sendEmail" class="button_send_email" value="Enviar" disabled />
                            
                        </form>
                    </div>
                    <div class="content_left">
                        <p><strong>Contactos</strong></p>
                         <div style="margin-top: 15px;">
                            <p><strong>MPITCA</strong></p>
                            <p>Urb. El Naranjal 2 Calle 198-A, Casa 120-92</p>
                            <p>Naguanagua - Valencia - Edo. Carabobo 2005</p>
                            <p>Venezuela</p>
                            <div style="display: block">
                                <img style="display: inline-block;width: 20px" src="static/images/fax-top-view.png" />
                                <p class="text_data_contant_me">58-241-8674543</p>
                            </div>
                        </div>
                        <div style="margin-top: 15px;">
                            <p><strong>Jorge Mosquera</strong></p>
                            <p>CDO - Chief Information Officer</p>

                            <div style="display: block">
                                <img style="display: inline-block;width: 20px" src="static/images/smartphone-call.png" />
                                <p class="text_data_contant_me">58-424-4460910</p>
                            </div>
                            <div style="display: block">
                                <img style="display: inline-block;width: 20px" src="static/images/envelope.png" />
                                <p class="text_data_contant_me">jorge.mosquera@mpitca.com.ve</p>
                            </div>
                        </div>
                        <div style="margin-top: 15px;">
                            <p><strong>Charles Chaderton</strong></p>
                            <p>CIO - Chief Information Officer</p>

                            <div style="display: block">
                                <img style="display: inline-block;width: 20px" src="static/images/smartphone-call.png" />
                                <p class="text_data_contant_me">58-414-4225146</p>
                            </div>
                            <div style="display: block">
                                <img style="display: inline-block;width: 20px" src="static/images/envelope.png" />
                                <p class="text_data_contant_me">charles.chaderton@mpitca.com.ve</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
  
            <div class="footer" style="margin-top: 25px;" >
                <div class="footer-top">
                    <div class="container">
                        <div class="footer-grids" style="text-align: center; display: block;margin: 0 auto;">
                            <div class=" footer-grid" style="display: inline-block; width: 32%;float: left;">
                                <div class="footer-logo">
                                    <h3><a href="index.php">MPIT</a></h3>
                                    <div>
                                        <p><a href="https://twitter.com/MPIT_CA" class="twitter-follow-button" data-show-count="false">Siga @MPIT_CA</a>			                                        
                                            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </p>
                                    </div>
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
       
        </div>
        
        <script src="static/js/responsiveslides.min.js"></script>


        <script type="text/javascript" src="static/js/move-top.js"></script>
        <script type="text/javascript" src="static/js/easing.js"></script>
        <script type="text/javascript" src="static/js/aos.js"></script>
        <script type="text/javascript" src="static/js/contact_me.js"></script>
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