<?php
class Persona {
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $correo;
    
    public function __construct($id, $nombre, $apellido, $correo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }
    
    public function getCorreo() {
        return $this->correo;
    }
    
    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellido;
    }
}
?>