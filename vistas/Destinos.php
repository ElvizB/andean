<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100" src="<?php echo RUTA_IMG?>destinos/destino.jpg" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->

<div class="barra pt-4 pb-4 z-depth-3">

    <div class="container">

        <!-- Section: Testimonials v.3 -->
        <section class="team-section text-center">

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-2 mb-md-0 mb-3">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto wow flipInY" data-wow-delay="0.2s">
                            <img src="<?php echo RUTA_IMG?>destinos/mapa2.png" class="img-fluid">
                        </div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-md-0 mb-3">

                    <div class="testimonial pt-5">
                        <!--Content-->
                        <p class="white-text text-justify wow fadeInUp" data-wow-delay="0.4s"><?php echo $d_descrip; ?>
                        </p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-2 mb-md-0 mb-3">

                    <div class="testimonial text-justify white-text wow fadeInUp" data-wow-delay="0.6s">

                        <div class="mb-2">
                            <span class="lang font-weight-bold" key="d_area_geo"><?php echo $d_area_geo; ?></span>
                            <br>
                            <!-- Section description -->
                            <span class="white-text w-responsive mx-auto">1 285 216,20 km²</span>

                        </div>

                        <div class="mb-2">
                            <span class="font-weight-bold"><?php echo $d_moneda; ?></span>
                            <br>
                            <!-- Section description -->
                            <span class="w-responsive mx-auto">Sol(S/)</span>

                        </div>

                        <div>
                            <span class="font-weight-bold"><?php echo $d_pobla; ?></span>
                            <br>
                            <!-- Section description -->
                            <span class="class w-responsive mx-auto"><?php echo $d_pobla2; ?></span>

                        </div>

                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-2">

                    <div class="testimonial text-justify white-text wow fadeInUp" data-wow-delay="0.8s">

                        <div class="mb-2">
                            <span class="font-weight-bold"><?php echo $d_idioma; ?></span>
                            <br>
                            <!-- Section description -->
                            <span class="white-text w-responsive mx-auto"><?php echo $d_idioma2; ?></span>

                        </div>

                        <div class="mb-2">
                            <span class="font-weight-bold">CAPITAL</span>
                            <br>
                            <!-- Section description -->
                            <span class="w-responsive mx-auto">Lima</span>

                        </div>

                        <div>
                            <span class="font-weight-bold"><?php echo $d_aeropuerto; ?></span>
                            <br>
                            <!-- Section description -->
                            <span class="w-responsive mx-auto">Jorge Chávez (Lima)
                            </span>

                        </div>

                    </div>

                </div>
                <!--Grid column-->


            </div>
            <!--Grid row-->

        </section>
        <!-- Section: Testimonials v.3 -->

    </div>

</div>

<div>
    <div class="container">
        <div class="row text-center" id="espacio">
            <div class="container2">


                <div class="content2">
                    <div class="">
                        <p class="title-descriptions-map wow fadeInUp " data-wow-delay="0.1s"><?php echo $d_mapa; ?>
                        </p>
                    </div>

                    <div id="content-background">

                        <img id='bg' class=" item-background wow bounceIn" data-wow-delay="0.1s"
                            src="<?php echo RUTA_IMG?>destinos/lugares/mapa.png" alt="mapa">

                        <div class="content-items ">

                            <div class="view" style="position:static !important">
                                <div data-value='st15' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 1; left: 31px; top: 21px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/cusco.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Cusco</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st6' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 2; left: 32.0234px; top: 115px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/lima.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Lima</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st11' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 3; left: 32px; top: 212px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/arequipa.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Arequipa</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st10' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 4; left: 32.6593px; top: 315px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/colca.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Colca</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st16' class='item-map  wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 5; left: 32px; top: 412.5px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/puno.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Puno</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st5' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 14; left: 31px; top: 516px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/huaraz.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Huaraz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st9' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 13; left: 31px; top: 613px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/ayacucho.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Ayacucho</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st7' class='item-map wow flipInY' data-wow-delay="0.1s"
                                    style="width: 258px; height: 76px; z-index: 6; left: 32px; top: 718px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/islasballestas.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Islas Ballestas</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st8' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 9; left: 996.468px; top: 20px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/nazca.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Nazca</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st14' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 7; left: 996px; top: 115px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/manu.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Manu</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st12' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 11; left: 996px; top: 212px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/amazonas.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Amazonas</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st13' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 15; left: 996px; top: 315.583px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/iquitos.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Iquitos</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st4' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 10; left: 996px; top: 412.5px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/trujillo.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Trujillo</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st3' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 16; left: 996px; top: 516px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/chiclayo.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Chiclayo</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st2' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 8; left: 996px; top: 613.395px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/mancora.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Máncora</p>
                                    </div>
                                </div>
                            </div>

                            <div class="view" style="position:static !important">
                                <div data-value='st1' class='item-map wow flipInY' data-wow-delay="0.3s"
                                    style="width: 258px; height: 76px; z-index: 12; left: 996px; top: 718px; position: absolute; display: inline-block;">
                                    <img class="z-depth-3" style="width: 258px; height: 76px;"
                                        src="<?php echo RUTA_IMG?>destinos/lugares/tumbes.png">
                                    <div class="stripe">
                                        <p class="text-left h5-responsive">Tumbes</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id='content-starts'>
                            <div id='st1'
                                style="width: 21px; height: 20px; z-index: 17; left: 390px; top: 160px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st2'
                                style="width: 21px; height: 20px; z-index: 1; left: 382.997px; top: 212px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st3'
                                style="width: 21px; height: 20px; z-index: 20; left: 425.218px; top: 275px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st4'
                                style="width: 21px; height: 20px; z-index: 21; left: 472px; top: 347px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st5'
                                style="width: 21px; height: 20px; z-index: 22; left: 511.5px; top: 412px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st6'
                                style="width: 21px; height: 20px; z-index: 23; left: 546.408px; top: 496px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st7'
                                style="width: 21px; height: 20px; z-index: 24; left: 580.01px; top: 603px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st8'
                                style="width: 21px; height: 20px; z-index: 25; left: 609.321px; top: 623px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st9'
                                style="width: 21px; height: 20px; z-index: 31; left: 666.053px; top: 636px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st10'
                                style="width: 21px; height: 20px; z-index: 26; left: 756.642px; top: 656.449px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st11'
                                style="width: 21px; height: 20px; z-index: 27; left: 766.5px; top: 708px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st12'
                                style="width: 21px; height: 20px; z-index: 18; left: 501.772px; top: 202px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st13'
                                style="width: 21px; height: 20px; z-index: 19; left: 639px; top: 180px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st14'
                                style="width: 21px; height: 20px; z-index: 30; left: 787px; top: 516px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st15'
                                style="width: 21px; height: 20px; z-index: 29; left: 777px; top: 572px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                            <div id='st16'
                                style="width: 21px; height: 20px; z-index: 28; left: 852.813px; top: 656px; position: absolute; display: none;">
                                <img style="width: 21px; height: 20px;" src="<?php echo RUTA_IMG?>sombreado.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="movilnomap">

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/lima.png" class="img-fluid z-depth-1 wow zoomIn"
                            data-wow-delay="0.3s" alt="First slide">
                        <div class="stripe">
                            <p class="text-left h5-responsive">Lima</p>
                        </div>
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/arequipa.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/colca.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/colca.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/puno.png" class="img-fluid z-depth-1 wow zoomIn"
                            data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/huaraz.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/ayacucho.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/islasballestas.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/nazca.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/manu.png" class="img-fluid z-depth-1 wow zoomIn"
                            data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/amazonas.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/iquitos.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/trujillo.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/chiclayo.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/mancora.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>

                    <div class="text-center waves-effect waves-light pt-4" style="cursor: auto;">
                        <img src="<?php echo RUTA_IMG?>destinos/lugares/tumbes.png"
                            class="img-fluid z-depth-1 wow zoomIn" data-wow-delay="0.3s" alt="First slide">
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>




<?php
  include_once 'plantillas/footer.php';
           include_once 'plantillas/documento-cierre.inc.php';
?>