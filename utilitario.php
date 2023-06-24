<?php
class Utilitario extends Vehiculo
{
    public function __construct($propietario)
    {
        parent::__construct(1500, false, $propietario);
    }
}
?>