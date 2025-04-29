<?php
class CitaDAO {
    public function CitasDisponibles() {
        return "SELECT CONCAT(p.nombre, ' ', p.apellido) AS paciente,
                CONCAT(m.nombre, ' ', m.apellido) AS medico,
                co.nombre AS consultorio
                FROM Cita c
                JOIN Paciente p ON c.Paciente_idPaciente = p.idPaciente
                JOIN Medico m ON c.Medico_idMedico = m.idMedico
                JOIN Consultorio co ON c.Consultorio_idConsultorio = co.idConsultorio
                ORDER BY c.fecha, c.hora";
    }
}
?>