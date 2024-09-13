<?php
include('../conexdb.php');

if (isset($_POST["btnEliminar"])) {
    $nrc = $_POST["nrc"];
    $consultaBuscar = "SELECT * FROM proveedores WHERE nrc = '$nrc'";
    $resultadoBuscar = mysqli_query($conexion, $consultaBuscar);

    if (mysqli_num_rows($resultadoBuscar) > 0) {
        $consultaEliminar = "DELETE FROM proveedores WHERE nrc = '$nrc'";
        $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

        if ($resultadoEliminar) {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Eliminado exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al eliminar proveedor</div>';
        }
    } else {
        echo '<div style="width: 100%; text-align: center; color: yellow; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Proveedor no encontrado</div>';
    }

}
?>
