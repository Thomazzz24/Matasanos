<?php
$id = $_SESSION["id"];
$admin = new Admin($id);
if($admin->validar()){
    $admin -> consultar();
    echo "Hola " . $admin -> getNombre() . " " . $admin -> getApellido();
}else{
    echo "<h1>Error 404... no se encontro la pagina</h1>";
}

?>