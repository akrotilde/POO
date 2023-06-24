<?php
class DepartamentoMantenimiento {
    private $vehiculos = array();
    private $registrosMantenimiento = array();

    public function realizarMantenimiento(vehiculo $vehiculo) {
        // Código para realizar el mantenimiento del vehículo
    }

    public function registrarMantenimiento(vehiculo $vehiculo, $descripcion) {
        $registro = array('vehiculo' => $vehiculo, 'descripcion' => $descripcion);
        array_push($this->registrosMantenimiento, $registro);
    }

    public function obtenerRegistrosMantenimiento() {
        return $this->registrosMantenimiento;
    }
}

?>