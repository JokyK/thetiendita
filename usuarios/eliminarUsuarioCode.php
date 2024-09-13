<?php
include('../conexdb.php');
if(isset($_POST["btnEliminar"]) ){
$nombre = $_POST["nombre"];
$consultaBuscar = "SELECT * FROM usuarios where nombre = '$nombre'";
$resultadoBuscar = mysqli_query($conexion,$consultaBuscar);
if(mysqli_num_rows($resultadoBuscar)> 0){

    $consultaEliminar = "DELETE FROM usuarios where nombre = '$nombre' ";
    $resultadoEliminar = mysqli_query($conexion,$consultaEliminar);
    if($resultadoEliminar){
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >ELIMINADO exitosamente</div>';
    }else{
    
    }

}else{
    echo '<div style="width: 100%; text-align: center; color: yellow; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >El usuario no se encuentra o no existe</div>';
}

}
?>