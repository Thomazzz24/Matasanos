<?php
require_once ("Persona.php");
require_once ("persistencia/Conexion.php");
require_once ("persistencia/MedicoDAO.php");

class Medico extends Persona {
    private $clave;
    private $foto;
    private $especialidad_id;
    
    public function __construct($id=0, $nombre="", $apellido="", $correo="", $clave="", $foto=null, $especialidad_id=0) {
        parent::__construct($id, $nombre, $apellido, $correo);
        $this->clave = $clave;
        $this->foto = $foto;
        $this->especialidad_id = $especialidad_id;
    }
    
    public function getClave() {
        return $this->clave;
    }
    
    public function getFoto() {
        return $this->foto;
    }
    
    public function getEspecialidadId() {
        return $this->especialidad_id;
    }
    
    public function consultarPorEspecialidad($especialidad_id) {
        $conexion = new Conexion();
        $medicoDAO = new MedicoDAO();
        $conexion->abrir();
        $conexion->ejecutar($medicoDAO->consultarPorEspecialidad($especialidad_id));
        $medicos = array();
        while(($datos = $conexion->registro()) != null) {
            $medico = new Medico($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6]);
            array_push($medicos, $medico);
        }
        $conexion->cerrar();
        return $medicos;
    }
    
    public function getNombreCompleto() {
        return $this->getNombre() . " " . $this->getApellido();
    }
}
?>