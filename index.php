<?php

$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'elvizb.github.io/andean/'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'Nosotros':
        $ruta_elegida = 'vistas/Nosotros.php';
        break;
      case 'Destinos':
        $ruta_elegida = 'vistas/Destinos.php';
        break;
      case 'Contacto':
        $ruta_elegida = 'vistas/Contacto.php';
        break;
      case 'TrabajaConNosotros':
        $ruta_elegida = 'vistas/TrabajaConNosotros.php';
        break;
      case 'ProgramasCulturales':
        $ruta_elegida = 'vistas/Programas/ProgramasCulturales.php';
        break;
      case 'ProgramasEcologicosyNaturaleza':
        $ruta_elegida = 'vistas/Programas/ProgramasEcologicosyNaturaleza.php';
        break;
      case 'ProgramasAventuras':
        $ruta_elegida = 'vistas/Programas/ProgramasAventuras.php';
        break;
      case 'ProgramasVivenciales':
        $ruta_elegida = 'vistas/Programas/ProgramasVivenciales.php';
        break;
      case 'ProgramasDeLujos':
        $ruta_elegida = 'vistas/Programas/ProgramasDeLujos.php';
        break; 
      case 'ProgramasDeExperienciaCulinaria':
        $ruta_elegida = 'vistas/Programas/ProgramasDeExperienciaCulinaria.php';
        break;
    }
  }
}

include_once $ruta_elegida;