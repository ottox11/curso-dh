<?php

include ('cliente.php');

class Pyme extends Cliente
{
  private $Cuit;
  private $razonSocial;
}
public functions __construct(string $cuit, string $razonSocial )
{
  $this->cuit = $cuit;
  $this->razonSocial = $razonSocial;
}

public function setCuit($cuit)
{
  $this->cuit = $cuit;
}

public function getCuit(): string
{
  this->cuit;
}

public function setRazonSocial($razonSocial)
{
  $this->razonSocial = $razonSocial;
}

public function getRazonSocial(): string
{
  this->razonSocial;
}
 ?>
