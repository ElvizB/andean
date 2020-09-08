<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<div>
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="waves-effect waves-light" style="cursor: auto;">
                <img class="d-block w-100" src="images/culinarias/banner.jpg" alt="First slide">
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
                    <strong><?php echo $p_g_title; ?></strong>
                </h1>
                <p class="text-justify text-md-center py-3 wow fadeInUp" data-wow-delay="0.3s">
                    <?php echo $p_l_subtitle; ?></p>
            </div>
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <!--Card-->
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g1.jpg" alt="First slide">
                            <div class="fondo fondo_day_descrip">
                                <span class="white-text font-weight-bold"><?php echo $p_g_tar_day; ?></span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body fondo">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">PERU FUSIÓN</h6>
                            <span class="card-title white-text p_subtitulo">Lima, Arequipa, Puno & Cusco</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        <?php echo $p_g_tar_content; ?></p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="">
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
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g2.jpg" alt="First slide">
                            <div class="fondo2 fondo_day_descrip">
                                <span class="white-text font-weight-bold"><?php echo $p_g_tar_day2; ?></span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body fondo2">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo2"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">COCINA COSTEÑA Y ANDINA</h6>
                            <span class="card-title white-text p_subtitulo">Lima & Cusco</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        <?php echo $p_g_tar_content2; ?></p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="">
                                            <p class="p_boton white-text pt-2 font-weight-bold"><?php echo $btn_info; ?>
                                            </p>
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
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g3.jpg" alt="First slide">
                            <div class="fondo_ha">
                                <span class="lang white-text font-weight-bold"
                                    key="p_g_ex2"><?php echo $p_g_ex2; ?></span>
                            </div>
                            <div class="fondo3 fondo_day_descrip">
                                <span class="lang white-text font-weight-bold"
                                    key="p_g_tar_day3"><?php echo $p_g_tar_day3; ?></span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body fondo3">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo3"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_g_tar_title3; ?>
                            </h6>
                            <span class="card-title white-text p_subtitulo">Puerto Maldonado</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        <?php echo $p_g_tar_content3; ?></p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="">
                                            <p class="p_boton white-text pt-2 font-weight-bold"><?php echo $btn_info; ?>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </div>

    <div>
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="waves-effect waves-light" style="cursor: auto;">
                    <img class="d-block w-100" src="images/culinarias/banner_2.jpg" alt="First slide">
                </div>
                <!--/First slide-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
        <div class="pt-5 pb-4">
            <div class="container">

                <div class="pb-4">
                    <h1 class="h1-responsive font-weight-bold wow fadeInUp" data-wow-delay="0.3s">
                        <strong><?php echo $p_g_des; ?></strong>
                    </h1>
                    <hr style="border-top: 1px solid #000000;width:100% !important;">
                </div>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g4.jpg" alt="First slide">
                                <div class="fondo4 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo4">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo4"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title4; ?></h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content4; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g5.jpg" alt="First slide">
                                <div class="fondo5 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo5">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo5"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title5; ?></h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content5; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->

                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g6.jpg" alt="First slide">
                                <div class="fondo_ha">
                                    <span class="lang white-text font-weight-bold" key="p_g_hacienda">GREEN BIKE
                                        PERÚ</span>
                                </div>
                                <div class="fondo9 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo6">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo6"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title6; ?></h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content6; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g7.jpg" alt="First slide">
                                <div class="fondo7 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo7">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo7"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title7; ?></h6>
                                <span class="card-title white-text p_subtitulo">Cusco</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content7; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g8.jpg" alt="First slide">
                                <div class="fondo8 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo8">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo8"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title8; ?></h6>
                                <span class="card-title white-text p_subtitulo">Arequipa</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content8; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g9.jpg" alt="First slide">
                                <div class="fondo_ha">
                                    <span class="lang white-text font-weight-bold"
                                        key="p_g_hacienda"><?php echo $p_g_hacienda; ?></span>
                                </div>
                                <div class="fondo9 fondo_day_descrip">
                                    <span class="white-text font-weight-bold"><?php echo $p_g_tar_day4; ?></span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body fondo9">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo9"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    <?php echo $p_g_tar_title9; ?></h6>
                                <span class="card-title white-text p_subtitulo">Ica</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            <?php echo $p_g_tar_content9; ?></p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="">
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


                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>