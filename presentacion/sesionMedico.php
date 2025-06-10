<?php
<<<<<<< HEAD
if($_SESSION["rol"] != "medico"){
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
}
?>
<body>
<?php 
include ("presentacion/encabezado.php");
include ("presentacion/menuMedico.php");
?>





</body>

=======
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
>>>>>>> 401e1b60fc2bf7a80a9d203ddb0cbca409d824c5
