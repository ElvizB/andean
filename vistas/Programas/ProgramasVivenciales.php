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
      <img class="d-block w-100" src="images/vivencial/banner.jpg" alt="First slide">
    </div>
    <!--/First slide-->
  </div>
  <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
<div class="pt-5 pb-4">
  <div class="container">
    <div>
      <h1 class="h1-responsive font-weight-bold text-center pt-4 wow fadeInUp" data-wow-delay="0.1s"><strong><?php echo $p_v_title; ?></strong></h1>
      <p class="text-justify text-md-center py-3 wow fadeInUp" data-wow-delay="0.3s"><?php echo $p_v_subtitle; ?></p>         
    </div>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
        <!--Card-->
        <div class="card wow zoomIn" data-wow-delay="0.1s">
          <!--Card image-->
          <div class="waves-effect waves-light zoom" style="cursor: auto;">
            <div class="fondo_eco">
              <span class="white-text font-weight-bold" ><?php echo $p_valle; ?></span>
            </div>
            <img class="w-100" src="images/vivencial/v1.jpg" alt="First slide">
            <div class="fondo fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo" ><?php echo $p_v_tar_title; ?></h6>
            <span class="card-title white-text p_subtitulo">Cusco</span>
            <!--Text-->
          </div>

          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip" ><?php echo $p_v_tar_content; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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
            <div class="fondo_eco">
              <span class="white-text font-weight-bold"><?php echo $p_valle; ?></span>
            </div>
            <img class="w-100" src="images/vivencial/v2.jpg" alt="First slide">
            <div class="fondo2 fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo2">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo2"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_v_tar_title2; ?></h6>
            <span class="card-title white-text p_subtitulo">Cusco</span>
            <!--Text-->
          </div>

          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip"><?php echo $p_v_tar_content2; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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
            <div class="fondo_eco">
              <span class="white-text font-weight-bold"><?php echo $p_valle; ?></span>
            </div>
            <img class="w-100" src="images/vivencial/v3.jpg" alt="First slide">
            <div class="fondo3 fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo3">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo3"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_v_tar_title3; ?></h6>
            <span class="card-title white-text p_subtitulo">Cusco</span>
            <!--Text-->
          </div>

          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip"><?php echo $p_v_tar_content3; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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
            <img class="w-100" src="images/vivencial/v4.jpg" alt="First slide">
            <div class="fondo4 fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo4">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo4"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo"><?php echo $p_v_tar_title4; ?></h6>
            <span class="card-title white-text p_subtitulo">Lima & Cusco</span>
            <!--Text-->
          </div>

          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip"><?php echo $p_v_tar_content4; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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
            <img class="w-100" src="images/vivencial/v5.jpg" alt="First slide">
            <div class="fondo5 fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo5">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo5"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo">ISLAS UROS, AMANTANI & TAQUILE</h6>
            <span class="card-title white-text p_subtitulo">Puno</span>
            <!--Text-->
          </div>

          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip"><?php echo $p_v_tar_content5; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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
            <img class="w-100" src="images/vivencial/v6.jpg" alt="First slide">
            <div class="fondo6 fondo_day_descrip">
              <span class="white-text font-weight-bold"><?php echo $p_v_tar_day6; ?></span>
            </div>
          </div>
          <!--Card content-->
          <div class="card-body fondo6">
            <!--Title-->
            <div class="triangulo_figura fondo_triangulo6"></div>
            <h6 class="card-title white-text font-weight-bold p_titulo">COLCA VIVENCIAL</h6>
            <span class="card-title white-text p_subtitulo">Colca - Arequipa</span>
            <!--Text-->
          </div>



          <div class="d-flex flex-row">
            <div class="w-80 fondo-secundary">
              <div class="card-body">
                <p class="card-title white-text text-justify p_descrip"><?php echo $p_v_tar_content6; ?></p>
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
                    <p class="lang p_boton white-text pt-2 font-weight-bold" ><?php echo $btn_info; ?></p>
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


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>