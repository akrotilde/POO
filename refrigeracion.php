<?php
// Definimos la clase "Refrigeracion"
class Refrigeracion {
    // Propiedades privadas de la clase
    private $id;
  
    // Constructor de la clase, que establece los valores de las propiedades al momento de instanciar un objeto de la clase
    public function __construct($id) {
      $this->id = $id;
    }
  
    // Método público que devuelve el valor de la propiedad "tipo"
    private function getid() {
      return $this->id;
    }
  }
?>
