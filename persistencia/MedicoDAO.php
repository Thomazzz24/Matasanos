<?php
class MedicoDAO {
    public function consultarPorEspecialidad($especialidad_id) {
        return "SELECT idMedico, nombre, apellido, correo, clave, foto, Especialidad_id 
                FROM Medico 
                WHERE Especialidad_id = $especialidad_id
                ORDER BY nombre ASC";
    }
}
?>