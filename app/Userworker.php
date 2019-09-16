<?php

class Usuario_trabaja{

  private $id;
  private $nombre;
  private $nombreEmpresa;
  private $web;
  private $email;
  private $pais;
  private $organizacion;
  private $comentario;
  private $fecha_registro;
  private $activo;

  public function __construct($id, $nombre, $nombreEmpresa, $web, $email, $pais, $organizacion, $comentario, $fecha_registro, $activo){
    $this -> id = $id;
    $this -> nombre = $nombre;
    $this -> nombreEmpresa = $nombreEmpresa;
    $this -> web = $web;
    $this -> email = $email;
    $this -> pais = $pais;
    $this -> organizacion = $organizacion;
    $this -> comentario = $comentario;
    $this -> fecha_registro = $fecha_registro;
    $this -> activo = $activo;   

  }

  public function obtener_id() {
    return $this -> id;
  }

  public function obtener_nombre() {
    return $this -> nombre;
  }

  public function obtener_nombreEmpresa() {
    return $this -> nombreEmpresa;
  }

  public function obtener_web() {
    return $this -> web;
  }

  public function obtener_pais() {
    return $this -> pais;
  }

  public function obtener_organizacion() {
    return $this -> organizacion;
  }

  public function obtener_comentario() {
    return $this -> comentario;
  } 

  public function obtener_fecha_registro() {
    return $this -> fecha_registro;
  } 

  public function esta_activo() {
    return $this -> activo;
  }

  //cambiar parametros
  public function cambiar_nombre($nombre) {
    $this -> nombre = $nombre;
  }

  public function cambiar_nombre($nombreEmpresa) {
    $this -> nombreEmpresa = $nombreEmpresa;
  }

  public function cambiar_nombre($web) {
    $this -> web = $web;
  }

  public function cambiar_nombre($email) {
    $this -> email = $email;
  }

  public function cambiar_nombre($pais) {
    $this -> pais = $pais;
  }

  public function cambiar_nombre($organizacion) {
    $this -> organizacion = $organizacion;
  }

  public function cambiar_nombre($activo) {
    $this -> activo = $activo;
  }

}