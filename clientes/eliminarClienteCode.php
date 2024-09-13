<?php
include('../conexdb.php');

if (isset($_POST["btnEliminar"])) {
    $dui = $_POST["dui"];
    $consultaBuscar = "SELECT * FROM cliente WHERE dui = '$dui'";
    $resultadoBuscar = mysqli_query($conexion, $consultaBuscar);

    if (mysqli_num_rows($resultadoBuscar) > 0) {
        $consultaEliminar = "DELETE FROM cliente WHERE dui = '$dui'";
        $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

        if ($resultadoEliminar) {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">ELIMINADO exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al eliminar cliente</div>';
        }
    } else {
        echo '<div style="width: 100%; text-align: center; color: yellow; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">El cliente no se encuentra o no existe</div>';
    }

}
?>
