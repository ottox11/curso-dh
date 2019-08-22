<?php

include ('cliente.php');

class Persona extends Cliente
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
  }
  
}


 ?>
