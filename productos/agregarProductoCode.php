<?php
include("../conexdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cod_producto = $_POST['cod_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $consulta = "INSERT INTO productos (cod_producto, nombre_producto, descripcion, cantidad, precio) VALUES ('$cod_producto', '$nombre_producto', '$descripcion', $cantidad, $precio)";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Producto agregado exitosamente</div>';
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al agregar producto</div>';
    }

    mysqli_close($conexion);
}
?>
