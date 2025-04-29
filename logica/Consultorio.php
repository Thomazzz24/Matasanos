<?php
class Consultorio {
    private $id;
    private $nombre;
    
    public function __construct($id=0, $nombre="") {
        $this->id = $id;
        $this->nombre = $nombre;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
}
?>