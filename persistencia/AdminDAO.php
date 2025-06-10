<?php

class AdminDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;

    public function __construct($id = 0, $nombre = "", $apellido = "", $correo = "", $clave = ""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }

    public function autenticar(){
        return "select idAdmin
                from Admin 
<<<<<<< HEAD
                where correo = '" . $this -> correo . "' and clave = '" . md5($this -> clave) . "'";
=======
                where correo = '" . $this -> correo . "' and '" . md5($this -> clave) . "'";
    }

    public function validar($id){
        return "select idAdmin
                from Admin 
                where idAdmin = '" . $id ."'";
>>>>>>> 401e1b60fc2bf7a80a9d203ddb0cbca409d824c5
    }
    
    public function consultar(){
        return "select nombre, apellido, correo
                from Admin
                where idAdmin = '" . $this -> id . "'";
    }
}
