<?php
require_once 'carroseria.php';
require_once 'motor.php';
require_once 'chasis.php';
require_once 'componentes.php';
require_once 'refrigeracion.php'
require_once 'camion'
require_once 'utilitario'

class Vehiculo {
  // Propiedades privadas que representan componentes del vehículo
  private $motor;
  private $chasis;
  private $carroceria;
  private $componentes;
  
  // Otras propiedades del vehículo
  private $tara;
  private $propietario;
  private $enMantenimiento;
  private $refrigeracion;
  
  public function __construct(
    $motor, $chasis, $carroceria, $componentes, $tara, $propietario, $enMantenimiento, $refrigeracion
  ) 
  {
    // Se establecen los componentes del vehículo en el constructor
    $this->motor = $motor;
    $this->chasis = $chasis;
    $this->carroceria = $carroceria;
    $this->componentes = $componentes;
  
    // Se establecen las otras propiedades del vehículo
    $this->tara = $tara;
    $this->propietario = $propietario;
    $this->enMantenimiento = $enMantenimiento;
    $this->refrigeracion = $refrigeracion;
  }
  $vehiculo = new Vehiculo($motor, $chasis, $carroceria, $componentes, $tara, $propietario, $enMantenimiento, $refrigeracion);

  $Refrigeracion = $vehiculo->getRefrigeracion();
  
  $RefrigeracionBool = ($Refrigeracion == true) ? true : false;
}

?>