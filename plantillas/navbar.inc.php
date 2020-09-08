<div class="barra">
    <nav class="navbar navbar-expand-lg navbar-dark nav-height">

        <a class="" href="<?php echo SERVIDOR ?>">
            <img src="<?php echo RUTA_IMG?>logo_andean.png" class="LogoI wow pulse" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item nav-title">
                    <a class="nav-link " href="<?php echo SERVIDOR ?>"><?php echo $menu_inicio; ?></a>
                </li>

                <li class="nav-item nav-title">
                    <a class="nav-link" href="<?php echo RUTA_NOSOTROS ?>"><?php echo $menu_nosotros; ?></a>
                </li>


                <li class="nav-item nav-title dropdown" id="open">
                    <a class="nav-link dropdown-toggle "><?php echo $menu_programaviajes; ?></a>

                    <div class="barra dropdown-menu dropdown-primary nav-title" id="prueba">
                        <a class="dropdown-item " href="<?php echo RUTA_P_CULTURALES ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_cul; ?></a>
                        <a class="dropdown-item " href="<?php echo RUTA_P_ECOLOGICO ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_eco; ?></a>
                        <a class="dropdown-item " href="<?php echo RUTA_P_AVENTURA ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_aventura; ?></a>
                        <a class="dropdown-item" href="<?php echo RUTA_P_VIVENCIALES ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_vivencial; ?></a>
                        <a class="dropdown-item " href="<?php echo RUTA_P_LUJO ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_lujo; ?></a>
                        <a class="dropdown-item " href="<?php echo RUTA_P_CULINARIA ?>"><i
                                class="fas fa-minus mx-3"></i><?php echo $sub_menu_culinaria; ?></a>
                    </div>
                </li>

                <li class="nav-item nav-title">
                    <a class="nav-link " href="<?php echo RUTA_DESTINOS ?>"><?php echo $menu_destinos; ?></a>
                </li>

                <li class="nav-item nav-title">
                    <a class="nav-link " href="<?php echo RUTA_CONTACTO ?>"><?php echo $menu_contacto; ?></a>
                </li>

                <li class="nav-item nav-title">
                    <a class="nav-link " href="<?php echo RUTA_TRABAJA ?>"><?php echo $menu_trabaja; ?></a>
                </li>

                <li class="px-3 pt-1">
                    <a href="changelanguage.php?language=es" class="pr-3">
                        <img src="images/ban-es.png" alt="">
                    </a>

                    <a href="changelanguage.php?language=en">
                        <img src="images/ban-en.png" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</div>