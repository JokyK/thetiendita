<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numFactura = $_POST['factura'];
    $consulta = "SELECT * FROM compras WHERE num_factura = '$numFactura'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_assoc($resultado);

    if ($filas > 0) {
        $dui = $filas["nrc_proveedor"];
        $cod_producto = $filas["cod_producto"];
        $cantidad = $filas["cantidad"];
        $fecha = $filas["fecha_compra"];
    ?>
    <link rel="stylesheet" href="stylesTransacciones.css">
    <div class="container">
        <form method="post" class="form">

            <label for="nombre_producto">Num Factura</label>
            <input type="text" id="nombre_producto" name="factura" value="<?php echo htmlspecialchars($numFactura); ?>" readonly>

            <label for="nombre_producto">NRC</label>
            <input type="text" id="nombre_producto" name="dui" value="<?php echo htmlspecialchars($dui); ?>" readonly>

            <label for="descripcion">Codigo de Producto</label>
            <input type="text" id="descripcion" name="cod_producto" value="<?php echo htmlspecialchars($cod_producto); ?>" readonly>

            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>" readonly>

            <label for="precio">Fecha</label>
            <input type="text" id="precio" name="fecha_venta" value="<?php echo htmlspecialchars( $fecha); ?>" readonly>
            <a style="background-color: red; padding: 5px; color: white; margin-bottom:10px;" href="../fpdf/PruebaC.php?factura=<?php echo$numFactura?>&dui=<?php echo$dui?>&cod_producto=<?php echo$cod_producto?>&cantidad=<?php echo$cantidad?>&fecha=<?php echo$fecha?>">GENERAR PDF</a>
            <a style="background-color: gray; padding: 5px; color: white;" href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
    <?php
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">ERROR: VENTA no encontrada</div>';
    }

    mysqli_close($conexion);
}
?>
