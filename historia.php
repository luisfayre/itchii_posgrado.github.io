<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Estilos CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style_tec.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="css/font-awesome.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js"></script>
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>


        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">

        <title>Historia</title>
    </head>

    <body class="bodyIndex">
        <?php
        require_once 'includes/header_depi.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_depi.php';
            ?>
        </div>

        <div class="container">
            <div class="col-md-12">

                <!-- Contenido -->

                <div class="col-md-8">

                    <div class="row ">

                        <div class="col-md-12 bloque col-sm-12">

                            <h1 class="titulo"  style="color:rgb(27, 57, 105);">
                                Historia
                            </h1>

                        </div>

                        <div class="col-md-12 col-sm-12" style="text-align: justify">

                            <p>La inquietud de abrir un programa de Maestría en Ingeniería Industrial, en el Instituto Tecnológico de Chihuahua II (ITCHII), inicio desde el año de 1993, cuando se estableció un convenio con el Instituto Tecnológico de Ciudad Juárez (ITCJ), para capacitar personal docente del ITCHII, mediante la impartición del programa de Maestría en Ingeniería Industrial del ITCJ, en la figura conceptual de Maestría Itinerante, con la finalidad de formar los cuadros académicos básicos, con el objetivo de que en un futuro se abriera este programa de Maestría en el ITCHII.</p>
                            <p>Pasaron más de 10 años para que este objetivo se concretara. Los años de 2002 y 2003, fueron de un intenso trabajo de planteamiento y negociación para la formalización de este programa. En un inicio la propuesta se enfocó a denominar a este programa, como Maestría en Ingeniería Industrial, pero en ese entonces el enfoque que la Dirección de Educación Superior Tecnológica (DGEST), daba a los programas de maestría que autorizaba, eran de que su denominación fuera más específica, es decir, enfocada a un tema específico, en este caso un tema de la Ingeniería Industrial.</p>
                            <p>Por fin, en el mes de Agosto del año 2004, se inició, ya autorizada por la DGEST, el programa de Maestría en Dirección de Operaciones del ITCHII. Siendo su primer ingreso de 8 alumnos. Y también siendo el único programa de maestría del ITCHII, para esos tiempos.</p>
                            <p>En el año de 2007, la DGEST implemento una evaluación muy rigurosa de todos sus programas de maestría ya establecidos. En ese año el programa de Maestría en Dirección de Operaciones del Instituto Tecnológico de Chihuahua II, fue objeto de tres procesos de evaluación externa, aprobando los dos primeros, no siendo el resultado favorable en la tercero, que era el definitivo, cabe aclarar que las razones de la no aprobación, fueron más del orden administrativo que académico. Por lo tanto en ese año se le cancelo el registro al Programa de Maestría, llegando este a tener una población escolar de alrededor de 30 alumnos.</p>
                            <p>En el primer semestre del año 2012, a instancias de las autoridades directivas del ITCHII, se inició un nuevo proceso de solicitud de aprobación de un programa de maestría en Ingeniería Industrial. El primer documento presentado a las autoridades de posgrado de la DGEST, estuvo enfocado a la reapertura del anterior programa de Maestría en Dirección de Operaciones, pero ahora el enfoque académico que las autoridades daban a los programas de Ingeniería era de que fueran genéricos, por lo que se reformulo la propuesta, denominando al programa como Maestría en Ingeniería Industrial.</p>
                            <p>Por fin en Septiembre de 2012, en la ceremonia conmemorativa de los 25 años del ITCHII, las autoridades de la DGEST, que asistieron como invitadas a dicho evento, hicieron lectura del oficio de autorización del programa de Maestría en Ingeniería Industrial.</p>
                            <p>En Septiembre de 2013, inicio operaciones formales el Programa de Maestría en Ingeniería Industrial del ITCHII, con un primer ingreso de 14 alumnos.</p>
                            <p>Actualmente se han presentado tres primeros ingresos anuales, 2013, 2014 y 2015, todos ellos dados en los semestres académicos Agosto - Diciembre. Cabe destacar que en el semestre académico de Agosto del 2015, el ITCHII firmó un convenio con la Universidad Tecnológica de Parral, para impartir la el programa de Maestría en Ingeniería Industrial en la modalidad itinerante, con el objetivo de formar recursos humanos académicos en esa institución. Actualmente la población escolar de este programa en particular es de 18 alumnos.</p>

                        </div>

                    </div>

                </div>

                <?php
                require_once 'includes/widgets.php';
                ?>
            </div>
        </div>



        <div class="container">
            <!--Noticias Recientes-->
            <?php
            require_once 'includes/reciente.php';
            ?>
            <!--Pie de pagina-->
            <?php
            require_once 'includes/footer.php';
            ?>
        </div>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141677500-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-141677500-1');
        </script>
    </body>

</html>
