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
<div id="carousel-example-1z" class="carousel slide carousel-fade z-depth-3" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="waves-effect waves-light" style="cursor: auto;">
            <img class="d-block w-100 " src="images/nosotros/nosotros.jpg" alt="First slide">
        </div>
        <!--/First slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->

<!-- Section: Contact v.1 -->

<div class="container">

    <section class="my-5">
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-6 mb-lg-0 mb-4">

                <p class="responsive subtitle-uno wow fadeInUp" data-wow-delay="0.1s"> <?php echo $n_desc1; ?></p>

                <p class="responsive subtitle-dos wow fadeInUp" data-wow-delay="0.3s"><?php echo $n_desc2; ?>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6">

                <div class="waves-effect waves-light wow zoomIn z-depth-2" data-wow-delay="0.5s" style="cursor: auto;">
                    <img class="d-block w-100 " src="images/nosotros/N1.jpg" alt="First slide">
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>

</div>
<!-- Section: Contact v.1 -->

<div id="nosotros">

    <div class="container">

        <!-- Section: Testimonials v.3 -->
        <section class="team-section text-center my-5">

            <!-- Section heading -->
            <h2 class="h2-responsive title-viaje wow fadeInUp" data-wow-delay="0.2s">
                <?php echo $n_titulo; ?></h2>


            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n1.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item1; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n2.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item2; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n3.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item3; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n4.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item4; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row text-center wow fadeInUp">

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n5.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item5; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n6.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4" key="n_item6"><?php echo $n_item6; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-md-0 mb-5">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n7.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item7; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="images/nosotros/n8.png" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <p class="white-text mt-4"><?php echo $n_item8; ?></p>
                        <!--Review-->
                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Testimonials v.3 -->
    </div>

</div>

<div class="container ">

    <!-- Section: Testimonials v.3 -->
    <section class="team-section text-center my-5 py-5">

        <!--Grid row-->
        <div class="row text-center">

            <!--Grid column-->
            <div class="col-md-4 mb-md-0 mb-5 ">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="mx-auto waves-effect waves-light wow zoomIn z-depth-2" data-wow-delay="0.2s"
                        style="cursor: auto;">
                        <img src="images/nosotros/vision.png" class="d-block w-100 z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <p class="dark-text mt-4 text-justify wow fadeInUp" data-wow-delay="0.3s">
                        <?php echo $n_desc_vision; ?></p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-md-0 mb-5">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="mx-auto waves-effect waves-light wow zoomIn z-depth-2" data-wow-delay="0.4s"
                        style="cursor: auto;">
                        <img src="images/nosotros/mision.jpg" class="d-block w-100 z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <p class="dark-text mt-4 text-justify wow fadeInUp" data-wow-delay="0.5s">
                        <?php echo $n_desc_mision; ?></p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="mx-auto waves-effect waves-light wow zoomIn z-depth-2" data-wow-delay="0.6s"
                        style="cursor: auto;">
                        <img src="images/nosotros/valores.png" class="d-block w-100 z-depth-3 img-fluid">
                    </div>
                    <!--Content-->
                    <div class="mt-4 text-justify wow fadeInUp" data-wow-delay="0.7s">
                        <p style="margin-bottom: 0.3rem;">
                            <img src="images/nosotros/check.png" class="img-fluid" alt="Responsive image">
                            <span><?php echo $n_desc_v1; ?></span>
                        </p>
                        <p style="margin-bottom: 0.3rem;">
                            <img src="images/nosotros/check.png" class="img-fluid" alt="Responsive image">
                            <span><?php echo $n_desc_v2; ?></span>
                        </p>
                        <p style="margin-bottom: 0.3rem;">
                            <img src="images/nosotros/check.png" class="img-fluid" alt="Responsive image">
                            <span><?php echo $n_desc_v3; ?>.</span>
                        </p>
                        <p style="margin-bottom: 0.3rem;">
                            <img src="images/nosotros/check.png" class="img-fluid" alt="Responsive image">
                            <span><?php echo $n_desc_v4; ?></span>
                        </p>
                    </div>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->


    </section>
    <!-- Section: Testimonials v.3 -->

</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>