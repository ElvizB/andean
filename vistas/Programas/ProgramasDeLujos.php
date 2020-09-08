<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
            <div class="view waves-effect waves-light" style="cursor: auto;">
                <img class="d-block w-100" src="images/lujo/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-caption">
                <!--
<h3 class="h3-responsive">Light mask</h3>
<p>First text</p>
-->
            </div>
        </div>

        <div class="carousel-item">
            <!--Mask color-->
            <div class="view waves-effect waves-light" style="cursor: auto;">
                <img class="d-block w-100" src="images/lujo/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-caption">
                <!--
<h3 class="h3-responsive">Strong mask</h3>
<p>Secondary text</p>
-->
            </div>
        </div>

        <div class="carousel-item">
            <!--Mask color-->
            <div class="view waves-effect waves-light" style="cursor: auto;">
                <img class="d-block w-100" src="images/lujo/banner3.jpg" alt="Third slide">
            </div>
            <div class="carousel-caption">
                <!--
<h3 class="h3-responsive">Slight mask</h3>
<p>Third text</p>
-->
            </div>
        </div>

    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->

<div class="pt-5 pb-4">
    <div class="container">
        <div>
            <h1 class="h1-responsive font-weight-bold text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <strong><?php echo $p_l_title; ?></strong>
            </h1>
            <p class="text-justify text-md-center py-3 wow fadeInUp" data-wow-delay="0.3s"><?php echo $p_l_subtitle; ?>
            </p>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l1.jpg" alt="First slide">
                        <div class="fondo fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title; ?></h6>
                        <span class="card-title white-text p_subtitulo" key="">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l2.jpg" alt="First slide">
                        <div class="fondo2 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day2; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo2">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo2"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title2; ?></h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Puno & Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content2; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l3.jpg" alt="First slide">
                        <div class="fondo3 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day3; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo3">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo3"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title3; ?></h6>
                        <span class="card-title white-text p_subtitulo">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content3; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l4.jpg" alt="First slide">
                        <div class="fondo4 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day4; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo4">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo4"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title4; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content4; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l5.jpg" alt="First slide">
                        <div class="fondo5 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day5; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo5">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title5; ?></h6>
                        <span class="card-title white-text p_subtitulo" key="">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content5; ?>
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
                                    <a href="">
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
                        <img class="w-100" src="images/lujo/l6.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <img src="images/estrella.png">
                            <span class="white-text font-weight-bold"><?php echo $p_av_des; ?></span>
                        </div>
                        <div class="fondo6 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_g_tar_day2; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo6">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo6"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">SALKANTAY TREK</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $des_salkantay; ?>
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
                                    <a href="">
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


        </div>
        <!-- Grid row -->

        <div class="pb-4">
            <h1 class="h1-responsive font-weight-bold wow fadeInUp" data-wow-delay="0.3s">
                <strong><?php echo $p_l_ex; ?></strong>
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
                        <img class="w-100" src="images/ProgramasEcologicos/o9.png" alt="First slide">
                        <div class="fondo6 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day6; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo6">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo6"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title6; ?></h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content6; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o2.png" alt="First slide">
                        <div class="fondo7 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day7; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo7">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo7"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_l_tar_title7; ?></h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content7; ?>
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
                                    <a href="">
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l8.jpg" alt="First slide">
                        <div class="fondo8 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_l_tar_day8; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo8">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo8"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">PARACAS</h6>
                        <span class="card-title white-text p_subtitulo">Pisco - Paracas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_l_tar_content8; ?>
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
                                    <a href="">
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

        </div>
    </div>
</div>



<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>