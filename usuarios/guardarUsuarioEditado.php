<?php
include('../conexdb.php');
if($_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_POST["btnEditar"])) {

    $nombre = $_POST["nombre"];
    $contra = $_POST["contra"];
    $tipo = $_POST["tipo"];
    $ultimo_acceso = $_POST["acceso"];

    $consulta = "UPDATE usuarios set contra = '$contra', tipo = '$tipo', ultimo_acceso = '$ultimo_acceso' where nombre = '$nombre'";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado) {
        echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >EDITADO exitosamente</div>';
    }else{
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px; " >Error al EDITAR usuario</div>';
    }
}
}

?>