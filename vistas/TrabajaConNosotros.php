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
            <img class="d-block w-100" src="images/trabaja/trabaja.jpg" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->

<div class="pt-5 pb-5">

    <div class="container">

        <div>
            <p class="text-justify py-3 wow fadeInUp" data-wow-delay="0.1s"><?php echo $t_descrip; ?></p>
            <h1 class="h1-responsive font-weight-bold text-center wow fadeInUp" data-wow-delay="0.3s" key="t_descrip2">
                <strong><?php echo $t_descrip2; ?></strong></h1>

        </div>


    </div>

</div>


<div id="trabaja" class="wow fadeIn" data-wow-delay="0.1s">

    <div class="container">

        <!-- Section: Contact v.1 -->
        <section>

            <div class="row align-items-center">


                <!-- Grid column -->
                <div class="col-lg-8 mb-lg-0 mb-4">

                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold text-center white-text"
                            style="border-bottom: 2px solid white;"><?php echo $t_descrip3; ?></h1>

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 ">

                    <!-- Form with header -->
                    <div class="card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-body">
                            <!-- Header -->
                            <div class="md-form">

                                <input type="text" id="form-name" class="form-control">
                                <label for="form-name">NOMBRE COMPLETO DEL CONTACTO</label>
                            </div>

                            <div class="md-form">

                                <input type="text" id="form-nameempresa" class="form-control">
                                <label for="form-nameempresa">NOMBRE DE LA EMPRESA</label>
                            </div>

                            <div class="md-form">

                                <input type="text" id="form-page" class="form-control">
                                <label for="form-page">PAGINA WEB DE LA EMPRESA</label>
                            </div>


                            <div class="md-form">

                                <input type="text" id="form-email" class="form-control">
                                <label for="form-email">CORREO ELECTRONICO</label>
                            </div>

                            <div class="md-form">

                                <input type="text" id="form-country" class="form-control">
                                <label for="form-country">PAIS DONDE RESIDE LA EMPRESA</label>
                            </div>

                            <div class="md-form">

                                <input type="text" id="form-organization" class="form-control">
                                <label for="form-organization">INDICAR SI PERTENECEN A ALGUNA ORGANIZACION</label>
                            </div>

                            <div class="md-form">

                                <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                <label for="form-text">INFORMACION EXTRA SOBRE LA EMPRESA</label>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btnfondo">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <!-- Form with header -->

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Contact v.1 -->


    </div>

</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>