<?php
include("conexdb.php");

if($_SERVER['REQUEST_METHOD']== 'POST'){
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contra='$contra'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if($filas > 0){
    header("location:escritorioTrabajo.html");
}else{
    echo "ERROR: DATOS INCORRECTOS";
}

mysqli_close( $conexion );
}

?>