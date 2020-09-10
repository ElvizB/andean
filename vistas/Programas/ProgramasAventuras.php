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
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100" src="images/aventura/banner.jpg" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
<div class="pt-5 pb-4">
    <div class="container">
        <div class="u-title-programs">
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.1s">
                <?php echo $p_av_title; ?>
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                <?php echo $p_av_subtitle;?><br><?php echo $p_av_subtitle2;?> </p>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/aventura/a1.jpg" alt="First slide">
                        <div class="fondo fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_av_tar_content; ?>
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
                                    <a href="<?php echo $pdf_Camino_Inca_; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a2.jpg" alt="First slide">
                        <div class="fondo2 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day2; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo2">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo2"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title2; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content2; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Camino_Inca2; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a3.jpg" alt="First slide">
                        <div class="fondo3 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day3; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo3">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo3"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title3; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content3; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Salkantaytrek; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a4.jpg" alt="First slide">
                        <div class="fondo4 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day4; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo4">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo4"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title4; ?></h6>
                        <span class="card-title white-text p_subtitulo">Lima & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content4; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Lares_trek; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a5.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <img src="images/estrella.png">
                            <span class="white-text font-weight-bold"><?php echo $p_av_des; ?></span>
                        </div>
                        <div class="fondo5 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day5; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo5">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title5; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content5; ?></p>
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
                        <img class="w-100" src="images/aventura/a6.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <img src="images/estrella.png">
                            <span class="white-text font-weight-bold"><?php echo $p_av_des; ?></span>
                        </div>
                        <div class="fondo6 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day6; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo6">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo6"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title6; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content6; ?></p>
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

            <!--          asdadasda-->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/aventura/a7.jpg" alt="First slide">

                        <div class="fondo7 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day7; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo7">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo7"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title7; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content7; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Choquequirao_trek; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a8.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <span class="white-text  font-weight-bold">Vinincunca</span>
                        </div>
                        <div class="fondo8 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day8; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo8">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo8"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title8; ?></h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content8; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Vinincuca; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a9.jpg" alt="First slide">
                        <div class="fondo9 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day9; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo9">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo9"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">PALCOYO</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content9; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Palcoyo; ?>" target="_blank">
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
                        <img class="w-100" src="images/aventura/a10.jpg" alt="First slide">
                        <div class="fondo10 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day10; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo10">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo10"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title10; ?>
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content10; ?></p>
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
                        <img class="w-100" src="images/aventura/a11.jpg" alt="First slide">
                        <div class="fondo11 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day11; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo11">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo11"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title11; ?>
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content11; ?></p>
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
                        <img class="w-100" src="images/aventura/a12.jpg" alt="First slide">
                        <div class="fondo12 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day12; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo12">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo12"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">WAQRA PUKARA </h6>
                        <span class="card-title white-text p_subtitulo">Huaraz</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content12; ?></p>
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
            <!--          asdadasdsad-->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/aventura/a13.jpg" alt="First slide">
                        <div class="fondo13 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day13; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo13">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo13"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_av_tar_title13; ?>
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content13; ?></p>
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
                        <img class="w-100" src="images/aventura/a14.jpg" alt="First slide">
                        <div class="fondo14 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_av_tar_day14; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo14">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo14"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ARENEROS</h6>
                        <span class="card-title white-text p_subtitulo">Paracas e Ica</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content14; ?></p>
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
                        <img class="w-100" src="images/aventura/a16.jpg" alt="First slide">
                        <div class="fondo16 fondo_day_descrip">
                            <span class="lang white-text font-weight-bold"><?php echo $p_av_tar_day16; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo16">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo16"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">COLCA TREK</h6>
                        <span class="card-title white-text p_subtitulo">Colca-Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_av_tar_content16; ?></p>
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
            <div class="col-lg-4 col-md-6 col-sm-12">

                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">

                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="images/contacto_tres.png" alt="First slide">

                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive"><?php echo $p_av_Consubtitle; ?></h6>
                            <span class="white-text font-weight-bold h3-responsive"><?php echo $p_av_contact; ?></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">


        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row ">

        </div>
        <!-- Grid row -->

    </div>
</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>