<?php
include("../conexdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $factura = $_POST["factura"];

    // Consulta para obtener los productos y cantidades de la factura de venta
    $query = "SELECT cod_producto, cantidad FROM ventas WHERE num_factura = '$factura'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $codigo = $row["cod_producto"];
        $cantidad = $row["cantidad"];

        // Actualizar la cantidad del producto en la tabla productos (sumando la devolución)
        $queryProductos = "UPDATE productos SET cantidad = cantidad + '$cantidad' WHERE cod_producto = '$codigo'";
        $resultProductos = mysqli_query($conexion, $queryProductos);

        if ($resultProductos) {
            // Eliminar la venta de la tabla ventas
            $queryVenta = "DELETE FROM ventas WHERE num_factura = '$factura'";
            $resultVenta = mysqli_query($conexion, $queryVenta);

            if ($resultVenta) {
                // Mensaje de éxito
                echo '<div style="width: 100%; color: white; background-color: green;"> Productos Actualizados Correctamente!, Devolución de venta Realizada. </div>';
            } else {
                // Error al eliminar la venta
                echo '<div style="width: 100%; color: white; background-color: red;"> No se pudo realizar la devolución de la venta </div>';
            }
        } else {
            // Error al actualizar los productos
            echo '<div style="width: 100%; color: white; background-color: red;"> No se pudieron actualizar los productos </div>';
        }
    } else {
        // La venta no existe o hubo un error en la consulta
        echo '<div style="width: 100%; color: white; background-color: red;"> La venta no existe o hubo un error en la consulta </div>';
    }
}
?>
