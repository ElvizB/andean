<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>



<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?php echo RUTA_IMG?>slider/banner_1.png"
             alt="First slide">
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
      <div class="view">
        <img class="d-block w-100" src="<?php echo RUTA_IMG?>slider/banner_2.png"
             alt="Second slide">
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
      <div class="view">
        <img class="d-block w-100" src="<?php echo RUTA_IMG?>slider/banner_3.png"
             alt="Third slide">
      </div>
      <div class="carousel-caption">
        <!--
<h3 class="h3-responsive">Slight mask</h3>
<p>Third text</p>
-->
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?php echo RUTA_IMG?>slider/banner_4.png"
             alt="Third slide">
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
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container">


  <div class="text-center py-4">
    <h1 class="py-3 wow fadeInUp" data-wow-delay="0.3s"><?php echo $Inicio_bienvenido; ?></h1>
    <h2 class="font-weight-bold wow fadeInUp" data-wow-delay="0.5s"><?php echo $Inicio_elige; ?></h2>
    <p class="class py-3 wow fadeInUp text-justify text-md-center" data-wow-delay="0.7s"><?php echo $descripcionInicio; ?></p>
    
  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12" id="imgweb">

      <div style="display: flex;">

        <div>

          <div class="recent-project">
            <a href="<?php echo RUTA_P_CULTURALES ?>" target="_blank">
              <figure class="img-galeria">

                <div class="overlay2">
                </div> 

                <div class="title2 ">
                  <div class="borderLetra font-weight-bold">
                    <p class="text-uppercase"><?php echo $sub_menu_cul; ?></p>
                  </div>
                </div>

                <img src="<?php echo RUTA_IMG?>galeria_inicio/a1.png" alt="project image" class="wow bounceInUp" data-wow-delay="0.3s">

              </figure>
            </a>
          </div>

        </div>

        <div>

          <div>

            <div class="recent-project">
              <a href="<?php echo RUTA_P_ECOLOGICO ?>" target="_blank">
                <figure class="img-galeria">

                  <div class="overlay2">
                  </div> 

                  <div class="title3">
                    <div class="borderLetra font-weight-bold">
                      <p class="text-uppercase"><?php echo $sub_menu_eco; ?></p>
                    </div>
                  </div>

                  <img src="<?php echo RUTA_IMG?>galeria_inicio/a2.png" alt="project image" class="wow fadeInDown" data-wow-delay="0.4s">
                </figure>
              </a>
            </div>

          </div>

          <div style="display: flex;">
            <div>

              <div class="recent-project">
                <a href="<?php echo RUTA_P_AVENTURA ?>" target="_blank">
                  <figure class="img-galeria">

                    <div class="overlay2">
                    </div> 

                    <div class="title">
                      <div class="borderLetra font-weight-bold">
                        <p class="text-uppercase"><?php echo $i_p_aventura; ?></p>
                      </div>
                    </div>

                    <img src="<?php echo RUTA_IMG?>galeria_inicio/a3.png" alt="project image" class="wow zoomIn" data-wow-delay="0.5s">									

                  </figure>
                </a>
              </div>


            </div>

            <div>

              <div class="recent-project">
                <a href="<?php echo RUTA_P_CULINARIA ?>" target="_blank">
                  <figure class="img-galeria">

                    <div class="overlay2">
                    </div> 

                    <div class="title">
                      <div class="borderLetra font-weight-bold">
                        <p class="text-uppercase"><?php echo $i_p_gastro; ?></p>
                      </div>		
                    </div>

                    <img src="<?php echo RUTA_IMG?>galeria_inicio/a4.png" alt="project image" class="wow fadeInLeft" data-wow-delay="0.2s">

                  </figure>
                </a>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div style="display: flex;">
        <div >

          <div class="recent-project">
            <a href="<?php echo RUTA_P_VIVENCIALES ?>" target="_blank">
              <figure class="img-galeria">

                <div class="overlay2">
                </div> 

                <div class="title">
                  <div class="borderLetra font-weight-bold">
                    <p class="text-uppercase"><?php echo $sub_menu_vivencial; ?></p>
                  </div>

                </div>

                <img src="<?php echo RUTA_IMG?>galeria_inicio/a5.png" alt="project image" class="wow fadeInRight">

              </figure>
            </a>
          </div>

        </div>

        <div >

          <div class="recent-project">
            <a href="<?php echo RUTA_P_LUJO ?>" target="_blank">
              <figure class="img-galeria">

                <div class="overlay2">
                </div> 

                <div class="title">
                  <div class="borderLetra font-weight-bold">
                    <p class="text-uppercase"><?php echo $sub_menu_lujo; ?></p>
                  </div>
                </div>

                <img src="<?php echo RUTA_IMG?>galeria_inicio/a6.png" alt="project image" class="wow fadeInUp" data-wow-delay="0.2s">

              </figure>
            </a>
          </div>

        </div>

        <div >

          <div class="recent-project">
            <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
              <figure class="img-galeria">

                <div class="overlay2">
                </div> 

                <div class="title">
                  <div class="borderLetra font-weight-bold">
                    <p class="text-uppercase"><?php echo $menu_contacto; ?></p>

                  </div>
                </div>

                <img src="<?php echo RUTA_IMG?>galeria_inicio/a7.png" alt="project image" class="wow fadeInRight" data-wow-delay="0.6s">

              </figure>
            </a>
          </div>
        </div>

      </div>

    </div>



    <div class="col-md-12 col-sm-12" id="imgmovil">

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.3s">
        <a href="<?php echo RUTA_P_CULTURALES ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/uno.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $sub_menu_cul; ?></p>
          </div>
        </a>
      </div>

      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.5s">
        <a href="<?php echo RUTA_P_ECOLOGICO ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/dos.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $sub_menu_eco; ?></p>
          </div>
        </a>
      </div>
      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.7s">
        <a href="<?php echo RUTA_P_AVENTURA ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/tres.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $i_p_aventura; ?></p>
          </div>
        </a>
      </div>

      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.9s">
        <a href="<?php echo RUTA_P_CULINARIA ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cuatro.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $i_p_gastro; ?></p>
          </div>
        </a>
      </div>

      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="1s">
        <a href="<?php echo RUTA_P_VIVENCIALES ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cinco.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $sub_menu_vivencial; ?></p>
          </div>
        </a>
      </div>

      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.2s">
        <a href="<?php echo RUTA_P_LUJO ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/seis.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $sub_menu_lujo; ?></p>
          </div>
        </a>
      </div>


      <div class="py-3"></div>

      <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.4s">
        <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
          <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/siete.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-black-light">
            <p class="white-text font-weight-bold"><?php echo $menu_contacto; ?></p>
          </div>
        </a>
      </div>

    </div>

  </div>

</div>
<!-- Start your project here-->


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>