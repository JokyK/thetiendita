<?php
include("../conexdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $factura = $_POST["factura"];

    // Consulta para obtener los productos y cantidades de la factura
    $query = "SELECT cod_producto, cantidad FROM compras WHERE num_factura = '$factura'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $codigo = $row["cod_producto"];
        $cantidad = $row["cantidad"];

        // Actualizar la cantidad del producto en la tabla productos
        $queryProductos = "UPDATE productos SET cantidad = cantidad - '$cantidad' WHERE cod_producto = '$codigo'";
        $resultProductos = mysqli_query($conexion, $queryProductos);

        if ($resultProductos) {
            // Eliminar la compra de la tabla compras
            $queryCompra = "DELETE FROM compras WHERE num_factura = '$factura'";
            $resultCompra = mysqli_query($conexion, $queryCompra);

            if ($resultCompra) {
                // Mensaje de éxito
                echo '<div style="width: 100%; color: white; background-color: green; text-aling:center; padding:4px;"> Productos Actualizados Correctamente!, Devolución de compra Realizada. </div>';
            } else {
                // Error al eliminar la compra
                echo '<div style="width: 100%; color: white; background-color: red; text-aling:center; padding:4px;"> No se pudo realizar la devolución </div>';
            }
        } else {
            // Error al actualizar los productos
            echo '<div style="width: 100%; color: white; background-color: red; text-aling:center; padding:4px;"> No se pudieron actualizar los productos </div>';
        }
    } else {
        // La compra no existe o hubo un error en la consulta
        echo '<div style="width: 100%; color: white; background-color: red; text-aling:center; padding:4px;"> La compra no existe o hubo un error en la consulta </div>';
    }
}

?>