<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA_IMG?>ico.ico">
    <?php
    if(!isset($titulo) || empty($titulo)){
      $titulo ='Andean Tours';
    }
    
    echo "<title>Andean Tours</title>";
    ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo RUTA_CSS?>inicio/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>nosotros/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>destinos/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>contacto/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>trabaja/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>programaculturales/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>programaculturales/colores.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>programaecologico/colores.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>aventura/colores.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>vivencial/colores.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>lujo/colores.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>culinaria/colores.css" rel="stylesheet">

  </head>

  <body class="oculto">   
    
    <div id="mdb-preloader" class="flex-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>