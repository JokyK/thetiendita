<?php
include("conexdb.php");

if($_SERVER['REQUEST_METHOD']== 'POST'){
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$tipoUsuario = $_POST['tipoUsuario'];
$fechaRegistro = $_POST['fechaRegistro'];
$consulta = "INSERT INTO usuarios values ('$nombre','$contra','$tipoUsuario','$fechaRegistro')";
$resultado = mysqli_query($conexion, $consulta);
if($resultado){
    echo 'Regisro Agregado Correctamente <a href="loginUsuario.html">INICIA SESIÓN</a>';
}else{
    echo "Error al ingresar el registro de usuario";
}

mysqli_close( $conexion );
}

?>