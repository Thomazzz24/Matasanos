<?php
class Paciente extends Persona {
    private $fechaNacimiento;
    
    public function __construct($id=0, $nombre="", $apellido="", $correo="", $fechaNacimiento="") {
        parent::__construct($id, $nombre, $apellido, $correo);
        $this->fechaNacimiento = $fechaNacimiento;
    }
    
    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }
}
?>