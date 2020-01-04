<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours - Programas Culturales';
?>

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100" src="images/ProgramasCulturales/banner.png" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
<div class="pt-5 pb-4">
    <div class="container">
        <div>
            <h1 class="h1-responsive font-weight-bold text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <strong><?php echo $p_c_title; ?></strong></h1>
            <p class="text-justify text-md-center py-3 wow fadeInUp " data-wow-delay="0.3s"><?php echo $p_c_subtitle; ?>
            </p>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/1.png" alt="First slide">
                        <div class="fondo fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CUSCO EXPRESS</h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Cusco_Express; ?>" target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold"><?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/2.png" alt="First slide">
                        <div class="fondo2 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day2; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo2">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo2"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_title2; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle2; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content2; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Andes_Reales; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/3.png" alt="First slide">
                        <div class="fondo3 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day3; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo3">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo3"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_titl3; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle3; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content3; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Antiguas_Civilizaciones; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/4.png" alt="First slide">
                        <div class="fondo4 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day4; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo4">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo4"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_titl4; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle4; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content4; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Quechuas_y_Aymaras; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/5.png" alt="First slide">
                        <div class="fondo5 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day5; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo5">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_titl5; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle5; ?></span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_c_tar_content5; ?>.</p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Circuito_Dorado; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/6.png" alt="First slide">
                        <div class="fondo6 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day6; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo6">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo6"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_titl6; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle6; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content6; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Peru_Andino; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasCulturales/7.png" alt="First slide">
                        <div class="fondo7 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_c_tar_day7; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo7">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo7"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_c_tar_titl7; ?></h6>
                        <span class="card-title white-text p_subtitulo"><?php echo $p_c_tar_subtitle7; ?></span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_c_tar_content7; ?>
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Expedicion_Peru; ?>" target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            <?php echo $btn_info; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">

                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="images/contacto.png" alt="First slide">

                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive"><?php echo $p_c_contacto; ?></h6>
                            <span class="white-text font-weight-bold h4-responsive"><?php echo $p_c_contacto2; ?></span>
                        </div>
                    </a>
                </div>
            </div>


        </div>
        <!-- Grid row -->
    </div>
</div>



<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>