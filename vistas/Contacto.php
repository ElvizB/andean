<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/requirelanguage.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>


<!-- Section: Contact v.1 -->
<section class="">
  <!--Google map-->
  <div id="map-container-section" class="z-depth-1-half map-container-section mb-4 wow fadeIn" data-wow-delay="0.1s"  style="height: 500px">
    <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15603.184731763095!2d-76.9917458!3d-12.1260935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7f5371585eb%3A0x7fd76fcfea4ba3be!2sAndean+Tours!5e0!3m2!1ses!2spe!4v1556027885905!5m2!1ses!2speed" frameborder="0"
            style="border:0;width: 100%;height: 100%;" allowfullscreen>
    </iframe>
  </div>

</section>
<!-- Section: Contact v.1 -->

<div class="container">

  <!-- Section: Testimonials v.3 -->
  <section class="team-section text-center pt-5 pb-5">

    <!--Grid row-->
    <div class="row text-center wow fadeInUp">

      <!--Grid column-->
      <div class="col-md-3 mb-md-0 mb-5">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="images/contactos/c1.png" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <span class="font-weight-bold color-blue"><?php echo $c_direcccion; ?></span>
          <p class="dark-text" >
            Centro Empresarial El Nuevo Trigal Calle Los Antares 320 Torre A OF 506 Urbanización La Alborada, Surco Lima 33, Perú
          </p>
          <!--Review-->
        </div>

      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-md-3 mb-md-0 mb-5">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="images/contactos/c2.png" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <span class="font-weight-bold color-blue"><?php echo $c_central_tel; ?></span>
          <p class="lang dark-text" >
            +51-1-2004320
            <br>
            Anexos:
            <br>
            Gerencia – 19
            <br>
            Turismo Receptivo – 11, 12, 13
            <br>
            Turismo Emisivo e Interno – 14,15
          </p>
          <!--Review-->
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 mb-md-0 mb-5">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="images/contactos/c3.png" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <span class="font-weight-bold color-blue">EMAIL</span>
          <p class="dark-text" >
            <a href="mailto:incoming@andean-tours.com" target="_parent" style="text-decoration:none;color: #595959;">incoming@andean-tours.com</a>
            <a href="mailto:contacto@andean-tours.com" target="_parent" style="text-decoration:none;color: #595959;">contacto@andean-tours.com</a>
          </p>
          <!--Review-->
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto mb-4">
            <img src="images/contactos/c4.png" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <span class="font-weight-bold color-blue">WEB</span>
          <p class="lang dark-text" >
            <a href="http://www.andean-tours.com/" target="_blank" style="text-decoration:none;color: #595959;">www.andean-tours.com</a>
          </p>
          <!--Review-->
        </div>

      </div>
      <!--Grid column-->





    </div>
    <!--Grid row-->

  </section>
  <!-- Section: Testimonials v.3 -->

</div>


<div id="contacto">

  <div class="container">

    <!-- Section: Contact v.1 -->
    <section>

      <div class="row align-items-center">


        <!-- Grid column -->
        <div class="col-lg-8 mb-lg-0 mb-4">

          <div class=" wow fadeInUp" data-wow-delay="0.1s" >                
            <h1 class="h1-responsive font-weight-bold text-center white-text"><?php echo $c_titulo; ?></h1>
            <hr />
            <h5 class="h1-responsive text-center white-text"><?php echo $c_subtitulo; ?></h5>

          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 ">

          <!-- Form with header -->
          <div class="card wow fadeInUp" data-wow-delay="0.3s" >
            <div class="card-body">
              <!-- Header -->
              <div class="md-form">

                <input type="text" id="form-name" class="form-control">
                <label for="form-name">NOMBRE</label>
              </div>

              <div class="md-form">

                <input type="text" id="form-apellido" class="form-control">
                <label for="form-apellido">APELLIDO</label>
              </div>

              <div class="md-form">

                <input type="text" id="form-nationality" class="form-control">
                <label for="form-nationality">NACIONALIDAD</label>
              </div>

              <div class="md-form">
                <select class="browser-default custom-select">
                  <option selected>CATEGORÍA DE HOTELES DESEADOS</option>
                  <option value="1">Económico</option>
                  <option value="2">3 estrellas</option>
                  <option value="3">4 estrellas</option>
                  <option value="3">5 estrellas</option>
                </select>
              </div>

              <div class="md-form">
                <select class="browser-default custom-select">
                  <option selected>SERVICIOS</option>
                  <option value="1">Servicio Privado</option>
                  <option value="2">Servicio Compartido</option>

                </select>
              </div>


              <div class="md-form">

                <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-text">DETALLE DE TU VIAJE*</label>
                <span style="color:white;font-size:10px;">* Fechas / Destinos que quieres visitar / Número de pasajeros.</span>
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