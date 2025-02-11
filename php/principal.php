<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../includes/mensaje_dia.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/principal.css">

        <!--link rel="stylesheet" href="../css/style.css"-->
        <!--link rel="stylesheet" href="../css/style_tec.css"-->
        <!--link rel="stylesheet" href="../css/index.css"-->

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <style>
            /* Note: Try to remove the following lines to see the effect of CSS positioning */
            .affix {
                top: 0;
                width: 100%;
                z-index: 9999 !important;
            }

            .affix + .container-fluid {
                padding-top: 70px;
            }
        </style>

    </head>



    <body style="background-color:#FAFAFA">


        <div class="container-fluid">
            <div class="">
                <a href="https://www.gob.mx/" id="" target="_self" class="widget_sp_image-image-link" title="">
                    <img width="100" height="31" alt="" class="attachment-100x31 alignleft" style="max-width: 100%;"
                         src="../img/logos/gob.png">
                </a>
            </div>

            <div>
                <img src="../img/banner_principal2-mod.png" width="100%"
                     alt="División de estudios de posgrado e investigación">
            </div>

            <!-- <div class="row">
                <div class="col-md-3 col-sm-2 hidden-xs hidden-sm" style="margin-left: 5%">
                    <img class="img-responsive" src="img/logos/logoSEP_hoz.png" width="286">
                </div>
                <div class="col-md-5 text-center">
                    <a href="index.html" target="_parent">
                        <img id="logoresp" src="img/logos/TEC_DEPI.png" class="img-responsive" alt="Responsive image">
                    </a>
                </div>
                <div class="col-md-1 col-sm-2  hidden-xs hidden-sm">
                    <a href="http://www.itchihuahuaii.edu.mx/index.html" target="_parent">
                        <img class="img-responsive" src="img/logos/logoITCH2.jpg" height="80">
                    </a>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs hidden-sm">
                    <img class="img-responsive" style="float:center" img="" src="img/DEPI 0 Col Web.jpg">
                </div>
            </div> -->

        </div> <!-- container -->

        <nav class="navbar" data-spy="affix" data-offset-top="280" role="navigation" style="background: #eaeaea;">

            <div class="container">


                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: #000000;">
                        DEPI
                    </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar" style="background-color: #000000"></span>
                        <span class="icon-bar" style="background-color: #000000"></span>
                        <span class="icon-bar" style="background-color: #000000"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="subenlaces">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="index.php" target="_top">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="_top" class="dropdown-toggle" data-toggle="dropdown">Información</a>
                            <ul class="dropdown-menu">
                                <li><a href="historia.php">Historia</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="mision.php"">Misión y Visión</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="documentos/calendarios/calendario-ene-jun-2019.pdf"
                                       target='_blank'>Calendario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://www.sistemasycomputacion.mx/medios/">Medios de Verificación</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="navbar bs-docs-nav col-md-12" role="banner">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color: #000000"></span>
                    <span class="icon-bar" style="background-color: #000000"></span>
                    <span class="icon-bar" style="background-color: #000000"></span>
                </button>
            </div>

            <nav id="navbar" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav nav-justified text-center">
                    <li class="dropdown">
                        <a href="index.php" target="_top">INICIO</a>
                    </li>
                    <li class="dropdown">
                        <a href="_top" class="dropdown-toggle" data-toggle="dropdown">INFORMACIÓN</a>
                        <ul class="dropdown-menu">
                            <li><a href="historia.php">Historia</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="mision.php"">Misión y Visión</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="documentos/calendarios/calendario-ene-jun-2019.pdf"
                                   target='_blank'>Calendario</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://www.sistemasycomputacion.mx/medios/">Medios de Verificación</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">POSGRADOS</a>
                        <ul class="dropdown-menu">
                            <li><a href="m_sistemas.php"">Maestría en Sistemas Computacionales</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="m_industrial.php"">Maestría en Ingeniería Industrial</a>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://moodle.itchihuahuaii.edu.mx/">Moodle para
                                    posgrados</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="documentos.php">Documentos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://sii.itchihuahuaii.edu.mx/">Sistema Integral De Información(SII)</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://www.itchihuahuaii.edu.mx">Tecnológico de Chihuahua II</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="encuesta.php">ENCUESTA</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATIVO</a>
                        <ul class="dropdown-menu">
                            <li><a href="convocatoria_base.php">Requisitos de ingreso</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="proceso_titulacion">Proceso de Titulación</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="normatividad">Normatividad</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOTICIAS</a>
                        <ul class="dropdown-menu">
                            <li><a href="convocatoria2017.php">Convocatoria 2018-1</a></li>
                            <li role="separator" class="divider">

                            </li>
                            <li>
                                <a href="coloquio_Ene-Jun-2017.php">Coloquio Enero-Junio 2017</a>
                            </li>
                            <li role="separator" class="divider">
                            </li>
                            <li>
                                <a href="coloquio_Dic-2017.php">Coloquio Diciembre 2017</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="coloquio_Ago-Dic-2016.php">Coloquio Ago-Dic 2016</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="m_coloqui_Ene-Jun_2016.php">Coloquio Ene-Jun 2016</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="tercerjornadaacad.php">Tercer Jornada Academica</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="inducainv.php">Inducción a Investigación</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="graduacion2g.php">Graduación 2<sup>a</sup> Gen.</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="m_convocatoria16_En-Jun.php">Convocatoria Ene-Jun 2016</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="m_coloquio201.php">Coloquio Ago-Dic 2015</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="convocatoria-2015.php">Convocatoria Ago-Dic 2015</a>
                            </li>
                            <li role="separator" class="divider">

                            </li>
                            <li><a href="toastmasters.php">ToastMasters 2015</a>
                            </li>
                        </ul>
                    </li> 
                </ul>
            </nav>
        </div>



        <div class="container" >
            <div class="col-md-12 text-center">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide col-md-offset-1 col-md-10 " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="convocatoria_base.php">
                                    <img title="Convocatoria Maestria sistemas computacionales itchii" class="slider" src="../img/Convocatoria-maestrias.jpg" 
                                         alt="Convocatoria Maestria sistemas computacionales itchii" style="width: 100%;">
                                </a>
                            </div>

                            <div class="item">
                                <a href="convocatoria_base.php">
                                    <img title="Convocatoria Maestria sistemas computacionales itchii" class="slider" src="../img/Convocatoria-maestrias.jpg" 
                                         alt="Convocatoria Maestria sistemas computacionales itchii" style="width: 100%;">
                                </a>
                            </div>

                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container" >
            <div id="noticias" class="col-md-12 bloque">



                <!-- Seccion de noticias-->

                <div class="col-md-8">
                    <!-- <div class="media">
                        <div class="media-left">
                            <div class="img2">
                                <img src="img\Coloquio_Ago-Dic-2016\Sistemas\4.jpg" alt="coloquio_ago_dic_16" class="media-object imgNews img-responsive imgNewsZoom">
                            </div>
                        </div>
                        <div class="media-body text-left">
                            <h2 class="media-heading">Coloquio Ago-Dic 2016</h2>
                            <p align="left">Aqui encontraras toda la información relacionada con el coloquio pasado.</p>
                            <p align="left"><a href="coloquio_Ago-Dic-2016.html" class="rm">LEER NOTA</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-left">
                            <div class="img2">
                                <img src="img/coloquio2016_e-j.jpg" alt="coloquio_ene-jun-16" class="media-object imgNews img-responsive">
                            </div>
                        </div>
                        <div class="media-body text-left">
                            <h2>Coloquio Enero-Junio 2016</h2>
                            <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio. </p>
                            <p class="Estilo34" align="left"><a href="m_coloqui_Ene-Jun_2016.html" class="rm">LEER NOTA</a></p>
                        </div>
                    </div>
                    <hr> -->
                    <div class="col-md-12">
                        <div class="thumbnail text-left">
                            <a href="documentos/Información_Maestría-2019a.pdf">
                                <img src="../img/pic08.jpg" alt="Maestria Sistemas Computacionales depi itchi ii" class="media-object img-responsive imgNewsZoom">
                            </a>
                            <div class="caption">
                                <p class="titulo_noticia">Convocatoria Maestrías 2019-1</p>
                                <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con la Convocatoria de Maestrías</p>
                                <p class="Estilo34" align="left"><a href="documentos/Información_Maestría-2019a.pdf" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail text-left imagen-noticia ">
                            <img src="../img/Coloqui_Dic-2017\Sistemas\4.jpg" alt="Coloquio Diciembre 2017 depi itchi ii" class="media-object img-responsive imgNewsZoom">
                            <div class="caption">
                                <h2>Coloquio Diciembre 2017</h2>
                                <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio.</p>
                                <p class="Estilo34" align="left"><a href="coloquio_Dic-2017.php" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6">
                        <div class="thumbnail text-left img2">
                            <img src="img/Coloquio_Ene-Jun_2017/1.jpg" alt="coloquio_ene-jun-17" class="media-object img-responsive imgNewsZoom">
                            <div class="caption">
                                <h2>Coloquio Enero-Junio 2017</h2>
                                <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio.</p>
                                <p class="Estilo34" align="left"><a href="coloquio_Ene-Jun-2017.html" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                    </div>--> 
                    <div class="col-md-6">
                        <div class="thumbnail text-left imagen-noticia">
                            <img src="../img/Jornada-4\jornada4 (4).jpg" alt="Cuarta Jornada Academica" class="media-object img-responsive imgNewsZoom">
                            <div class="caption">
                                <h2>Cuarta Jornada Académica</h2>
                                <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con la cuarta jornada académica.</p>
                                <p class="Estilo34" align="left"><a href="jornadaAcad4ta.php" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Seccion de widgets-->


                <div class="col-md-4">
                    <div class="text-center">

                        <!--Examen-->
                        <?php
                        if (verifica_rango($date_inicio, $date_fin2, $date_nueva)) {
                            echo "<p>
                                <a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\"target=\"_blank\">
                                <img src = \"../img/logos/examen.png\" alt=\"examen depi\"height=\"100 \" width=\"195\" style=\"max-width: 100%;\">
                                </a>
                            </p>";
                        }
                        ?>
                        <p>
                            <a href="" target="">
                                <img title="DEPI ITCH II" src="../img/logos/depi.png" alt="depi "height="100 " width="195" style="max-width: 100%;">
                            </a>
                        </p>

                        <p>
                            <a href="http://sii.itchihuahuaii.edu.mx/ " target="_blank ">
                                <img title="sii itchihuahuaii"src="../img/logos/SII.jpg " height="100 " width="195" style="max-width: 100%;" alt="sii itchi ii">
                            </a>
                        </p>

                        <!-- Calendario -->

                        <!-- Fin calendario -->
                        <p>
                            <a href="http://www.conricyt.mx" target="_blank">
                                <img src="../img/logos/conricyt.jpg" border="0" height="105" width="232">
                            </a>
                        </p>
                        <p>
                            <a href="http://capacitacion.conricyt.mx/ " target="_blank ">
                                <img src="../img/logos/conricytcap.jpg " border="0 " height="105 " width="232 ">
                            </a>
                        </p>
                        <p>
                            <a href="http://www.cnbes.sep.gob.mx/">
                                <img src="../img/logos/cnbes.png" border="0" height="105" width="232">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <!--header>

            <nav id="navbar" class="navbar navbar-fixed-top" role="navigation" style="background: #eaeaea;">
                <div class="container">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="#" style="color: #000000;">
                            DEPI
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="subenlaces">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="index.php" target="_top">Inicio</a>
                            </li>

                            <li class="dropdown">
                                <a href="_top" class="dropdown-toggle" data-toggle="dropdown">Información</a>
                                <ul class="dropdown-menu">
                                    <li><a href="historia.php">Historia</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="mision.php"">Misión y Visión</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="documentos/calendarios/calendario-ene-jun-2019.pdf"
                                           target='_blank'>Calendario</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="http://www.sistemasycomputacion.mx/medios/">Medios de Verificación</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">POSGRADOS</a>
                                <ul class="dropdown-menu">
                                    <li><a href="m_sistemas.php"">Maestría en Sistemas Computacionales</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="m_industrial.php"">Maestría en Ingeniería Industrial</a>
                                </ul>
                            </li>

                        </ul>
                    </div>


                </div>

            </nav>

        </header-->


        <div class="footer-widgets-wrapper">

            <div class="inner-wrap">
                <div class="footer-widgets-area clearfix">
                    <div class="tg-one-third">
                        <aside id="text-5" class="widget widget_text">
                            <div class="textwidget">
                                <a href="https://www.facebook.com/itchii.posgrados/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen1 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/facebook_color.png&#39;,1)" target="_blank">
                                    <img src="../img/logos/redes_sociales/facebook_btn.png" name="Imagen1" width="40" height="37" border="0" id="Imagen1" title="Facebook itchii posgrados">
                                </a>
                                <a href="https://twitter.com/posgradositch2" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen2 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/tweet_color.png&#39;,1)" target="_blank">
                                    <img src="../img/logos/redes_sociales/twitter_btn.png" name="Imagen2" width="40" height="37" border="0" id="Imagen2" title="Twitter itchii posgrados">
                                </a>
                                <br>
                            </div>
                        </aside>			
                    </div>
                    <div class="tg-one-third">
                        <aside id="text-6" class="widget widget_text">			
                            <div class="textwidget"><a href="http://tecnm.mx/" target="_blank">
                                    <img src="../img/logos/pielogoo.jpg">
                                </a>
                            </div>
                        </aside>			
                    </div>

                    <div class="tg-one-third tg-one-third-last">

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-socket-wrapper clearfix">
            <div class="inner-wrap">
                <div class="footer-socket-area">
                    <div class="center-copy-footer">
                        <div class="textwidget">ITCHII-Algunos derechos reservados © 2019
                            <br>
                            Ave. de las Industrias #11101, Complejo Industrial Chihuahua, Chih. México, CP 31130
                            <br>
                        </div>
                    </div>	
                </div>
            </div>
        </div>


        <div class = "links_footer">
            © 2019 |
            <a href = "http://www.tecnm.mx/informacion/ayuda-del-portal-web">ayuda</a>
            &nbsp;
            &nbsp;
            <a href = "http://www.tecnm.mx/informacion/accesibilidad">accesibilidad</a>
            &nbsp;
            &nbsp;
            <a href = "http://www.itchihuahuaii.edu.mx/?page_id=685">mapa del sitio</a>
            &nbsp;
            &nbsp;
            <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">contacto de portal</a>
            &nbsp;
            &nbsp;
            <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">políticas de privacidad</a>
        </div>	


    </body>
</html>






