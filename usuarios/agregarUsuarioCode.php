<?php
include("../conexdb.php");

if($_SERVER['REQUEST_METHOD']== 'POST'){
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$tipoUsuario = $_POST['tipoUsuario'];
$fechaRegistro = $_POST['fechaRegistro'];
$consulta = "INSERT INTO usuarios values ('$nombre','$contra','$tipoUsuario','$fechaRegistro')";
$resultado = mysqli_query($conexion, $consulta);
if($resultado){
    echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >Agregado exitosamente</div>';
}else{
    echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >Error al agregar usuario</div>';
}

mysqli_close( $conexion );
}

?>