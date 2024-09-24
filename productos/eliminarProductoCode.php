<?php
include('../conexdb.php');

if (isset($_POST["btnEliminar"])) {
    $cod_producto = $_POST["cod_producto"];
    $consultaBuscar = "SELECT * FROM productos WHERE cod_producto = '$cod_producto'";
    $resultadoBuscar = mysqli_query($conexion, $consultaBuscar);

    if (mysqli_num_rows($resultadoBuscar) > 0) {
        $consultaEliminar = "DELETE FROM productos WHERE cod_producto = '$cod_producto'";
        $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

        if ($resultadoEliminar) {
            echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Producto eliminado exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al eliminar producto</div>';
        }
    } else {
        echo '<div style="width: 100%; text-align: center; color: yellow; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">El producto no se encuentra o no existe</div>';
    }

    mysqli_close($conexion);
}
?>
