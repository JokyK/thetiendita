<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["btnEditar"])) {
        $cod_producto = $_POST["cod_producto"];
        $nombre_producto = $_POST["nombre_producto"];
        $descripcion = $_POST["descripcion"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];

        $consulta = "UPDATE productos SET nombre_producto = '$nombre_producto', descripcion = '$descripcion', cantidad = $cantidad, precio = $precio WHERE cod_producto = '$cod_producto'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Producto editado exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al editar producto</div>';
        }
    }
    
    mysqli_close($conexion);
}
?>
