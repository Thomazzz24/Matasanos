<?php
<<<<<<< HEAD
if($_SESSION["rol"] != "admin"){
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
}
?>
<body>
<?php 
include ("presentacion/encabezado.php");
include ("presentacion/menuAdmin.php");
?>





</body>

=======
$id = $_SESSION["id"];
$admin = new Admin($id);
if($admin->validar()){
    $admin -> consultar();
    echo "Hola " . $admin -> getNombre() . " " . $admin -> getApellido();
}else{
    echo "<h1>Error 404... no se encontro la pagina</h1>";
}

?>
>>>>>>> 401e1b60fc2bf7a80a9d203ddb0cbca409d824c5
