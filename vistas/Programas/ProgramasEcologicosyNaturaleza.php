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
            <img class="d-block w-100" src="images/ProgramasEcologicos/banner.jpg" alt="First slide">
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
                <strong><?php echo $p_e_title; ?></strong></h1>
            <p class="text-justify text-md-center py-3 wow fadeInUp" data-wow-delay="0.3s"><?php echo $p_e_subtitle; ?>
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
                        <img class="w-100" src="images/ProgramasEcologicos/o1.png" alt="First slide">
                        <div class="fondo fondo_day_descrip">
                            <span class="la white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_e_tar_title; ?></h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content; ?>
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
                                    <a href="<?php echo $pdf_Hacienda_Concepcion; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o2.png" alt="First slide">
                        <div class="fondo2 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo2">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo2"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_e_tar_title2; ?></h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content2; ?>
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
                                    <a href="<?php echo $pdf_Reserva_Amazonica; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o3.png" alt="First slide">
                        <div class="fondo3 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo3">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo3"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">REFUGIO AMAZONAS</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content3; ?>
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
                                    <a href="<?php echo $pdf_Refugio_Amazonas; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o4.png" alt="First slide">
                        <div class="fondo4 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo4">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo4"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">POSADA AMAZONAS</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content4; ?>
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
                                    <a href="<?php echo $pdf_Posada_Amazonas; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o5.png" alt="First slide">
                        <div class="fondo5 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo5">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_e_tar_title5; ?></h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content5; ?>
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
                                    <a href="<?php echo $pdf_TRC; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o6.png" alt="First slide">
                        <div class="fondo6 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo6">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo6"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CORTO MALTES LODGE</h6>
                        <span class="card-title white-text p_subtitulo">Tarapoto – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content6; ?>
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
                                    <a href="<?php echo $pdf_Corto_Maltes; ?>" target="_blank">
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


            <!-- Grid column 6666-->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o7.png" alt="First slide">
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold"><?php echo $p_eco_aventura; ?></span>
                        </div>
                        <div class="fondo7 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo7">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo7"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ECO AMAZONÍA LODGE</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content7; ?>
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
                                    <a href="<?php echo $pdf_Eco_Amazonia; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o8.png" alt="First slide">
                        <div class="fondo8 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo8">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo8"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">MANU</h6>
                        <span class="card-title white-text p_subtitulo">Madre de Dios - Manu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content8; ?>
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
                                    <a href="<?php echo $pdf_MANU_zona; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o9.png" alt="First slide">
                        <div class="fondo9 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo9">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo9"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CRUCEROS DELFIN</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip"><?php echo $p_e_tar_content9; ?>
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
                                    <a href="<?php echo $pdf_Crucero_Delfin; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o10.png" alt="First slide">
                        <div class="fondo10 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo10">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo10"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_e_tar_title10; ?></h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_e_tar_content10; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">
                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>
                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Crucero_Aria_Amazonas; ?>" target="_blank">
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
                        <img class="w-100" src="images/ProgramasEcologicos/o11.jpg" alt="First slide">
                        <div class="fondo11 fondo_day_descrip">
                            <span class="white-text font-weight-bold"><?php echo $p_e_tar_day11; ?></span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body fondo11">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo11"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CHACHAPOYAS</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    <?php echo $p_e_tar_content11; ?></p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo $pdf_Amazonas_Kuelap; ?>" target="_blank">
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
                        <img class="img-fluid" src="images/contacto_dos.png" alt="First slide">
                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive"><?php echo $p_subtitle_contact; ?></h6>
                            <span class="white-text font-weight-bold h3-responsive"><?php echo $p_e_contact; ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>