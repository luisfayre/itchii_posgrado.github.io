<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Estilos-->
        <link rel="stylesheet" href="../css/style_tec.css">
        <link rel="stylesheet" href="../css/index.css">
        <!-- Scripts-->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <title>Convocatoria</title>
    </head>

    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_noticias.php';
            ?>
        </div>

        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>CONVOCATORIA DE INGRESO 2015</h2>
                </div>
            </div>
            <div class="row text-center ">
                <div class="bloque col-md-12 col-sm-12">
                    <h3>MAESTRÍA EN SISTEMAS COMPUTACIONALES Y MAESTRÍA EN INGENIERÍA INDUSTRIAL</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 bloque col-sm-12">
                    <h4>
                        Fechas
                    </h4>
                </div>
                <div class="col-md-12 col-sm-12">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <ol>
                                        <li> Recepción de <a href="http://www.itchihuahuaii.edu.mx/webmaestria/documentos/FsolIngresoMaestriaFSI-01.docx">solicitud de ingreso</a>: 22 al 24 de junio, acudir al Instituto para completar y registrar la solicitud en oficinas de Posgrado ITCH II o enviarlas al correo posgrado@itchihuahuaii.edu.mx .</li>
                                        <li> Enviar carta de EXPOSICION DE MOTIVOS (por lo que desea estudiar un posgrado), al correo: posgrado@itchihuahuaii.edu.mx ó entregar en oficinas de Posgrado para programación de la entrevista.</li>
                                        <li> Entrevistas a candidatos de ambas maestrías: 25 de junio.</li>
                                        <li> Examen de conocimientos para las dos maestrías: 26 de junio.
                                            <br>
                                            <a href="http://www.itchihuahuaii.edu.mx/webmaestria/documentos/GuiaExamAdmonMII15-02.docx">  Guía de estudios para Maestría en Ing. Industrial.</a>
                                            <br>
                                            <a href="http://www.itchihuahuaii.edu.mx/webmaestria/documentos/GuiaExamAdmonMISC15-02.docx">  Guía de estudios para Maestría en Sistemass Computacionales.</a>
                                            <br> Examen de Inglés para ambas maestrías: 27 de junio.</li>
                                        <li> Publicación de resultados (en este sitio web): 5 de agosto a las 18:00 h. </li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <?php
                    require_once 'includes/informes.php';
                    ?>
                    <br>
                    <p>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <?php
            require_once 'includes/reciente.php';
            ?>

            <?php
            require_once 'includes/footer.php';
            ?>

        </div>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141677500-1"></script>
    </body>

</html>
