<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/CitaDAO.php");

class Cita {
    public function CitasDisponibles() {
        $conexion = new Conexion();
        $citaDAO = new CitaDAO();
        $conexion->abrir();
        $conexion->ejecutar($citaDAO->CitasDisponibles());
        $citas = array();
        while(($resultado = $conexion->registro()) != null) {
            $citas[] = [
                'paciente' => $resultado[0],
                'medico' => $resultado[1],
                'consultorio' => $resultado[2]
            ];
        }
        $conexion->cerrar();
        return $citas;
    }
}
?>