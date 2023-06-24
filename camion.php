<?php
require_once 'vehiculo.php'
class Camion extends Vehiculo {
  private $tara; // Se define la propiedad privada "tara"
  private $camionFrigorifico; // Se define la propiedad privada "camionFrigorifico"

  // Se define el constructor de la clase Camion, con varios parámetros
  public function __construct($motor, $chasis, $carroceria, $peso, $propietario, $enMantenimiento, $refrigeracion, $tara) {
    // Se llama al constructor de la clase Vehiculo, pasando los parámetros correspondientes
    parent::__construct($motor, $chasis, $carroceria, $peso, $propietario, $enMantenimiento, $refrigeracion);
    // Se asigna el valor del parámetro "tara" a la propiedad "tara"
    $this->tara = $tara;
    // Se verifica si el parámetro "refrigeracion" es verdadero o falso, y se asigna el resultado a la propiedad "camionFrigorifico"
    if($refrigeracion == true) {
        $this->camionFrigorifico = true;
    }
    else {
        // Si "refrigeracion" es falso, se asigna "false" a la propiedad "camionFrigorifico"
        $this->camionFrigorifico = false;
    }
  }

  // Se define la función "realizarMantenimiento", que cambia el valor de la propiedad "enMantenimiento" a verdadero y devuelve "true"
  public function realizarMantenimiento() {
      $this->enMantenimiento = true;
      return true;
  }

  // Se define la función "transportar", que simplemente imprime un mensaje indicando que el camión está transportando
  public function transportar() {
    echo "El camión está transportando";
  }
}

// Se crea un nuevo objeto de la clase Camion, pasando los parámetros correspondientes
$camion = new Camion("motorCamion", "chasisCamion", "carroceriaCamion", "propietarioCamion", true, true, 2000);

// Se obtiene el valor de la propiedad "refrigeracion" del objeto "$camion" y se convierte a booleano, luego se almacena en la variable "$camionFrigorifico"
$camionFrigorifico = (bool)$camion->getRefrigeracion();

// Se imprime el valor de la variable "$camionFrigorifico"
var_dump($camionFrigorifico);

// Se llama a la función "realizarMantenimiento" del objeto "$camion" y se imprime el valor de retorno
var_dump($camion->realizarMantenimiento());

// Se utiliza una estructura condicional "if" para determinar si el camión está en mantenimiento o listo para transportar, y se imprime el mensaje correspondiente
if ($camion->realizarMantenimiento()) {
    echo 'esta en mantenimiento';
} else {
    echo 'esta listo para transportar';
}
?>