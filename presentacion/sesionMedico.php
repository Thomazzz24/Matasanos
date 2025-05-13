<?php
$id = $_SESSION["id"];
$medico = new Medico($id);
if($medico->validar()){
    $medico -> consultar();
    echo "Hola " . $medico -> getNombre() . " " . $medico -> getApellido();
    echo ", Usted tiene la especialidad: " . $medico -> getEspecialidad() -> getNombre();
}else{
    echo "<h1>Error 404... no se encontro la pagina</h1>";
}

?>