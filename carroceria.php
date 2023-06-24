<?php
    class carroseria {
        /* Define el atributo ID como privado, para asegurar el principio de encapsulamiento */
        private $id;

        /* Método constructor, para inicializar el valor de ID al crear una nueva instancia de la clase */
        public function __construct($id){
            $this->id = $id;
        }

      /* Método getter, para obtener el valor de ID desde fuera de la clase */
        public function getId() {
            return $this->id;
        }
    }
?>
