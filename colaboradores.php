<?php
class EmpresaDeTransporte extends HomeroJayShipping
 {
    private $colaboradoresContratados = [];

    private function contratarColaborador($nuevo_colaborador) {
        // Invocamos el método contratarColaborador() de la clase padre
        parent::contratarColaborador($nuevo_colaborador);

        // Agregamos el colaborador al array de colaboradores contratados
        $this->colaboradoresContratados[] = $nuevo_colaborador;
        // Agregamos el colaborador al registro de la empresa de transporte
    
    public function agregarVehiculo($vehiculo, $gerenteLogistica)
    {
        // Lógica para agregar un vehículo al gerente de logística
    }
    }
 }
?>