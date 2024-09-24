<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cod_producto = $_POST['cod_producto'];
    $consulta = "SELECT * FROM productos WHERE cod_producto = '$cod_producto'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_assoc($resultado);

    if ($filas > 0) {
        $nombre_producto = $filas["nombre_producto"];
        $descripcion = $filas["descripcion"];
        $cantidad = $filas["cantidad"];
        $precio = $filas["precio"];
    ?>
    <link rel="stylesheet" href="stylesProducto.css">
    <div class="container">
        <form method="post" class="form">
            <label for="nombre_producto">Nombre del Producto</label>
            <input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo htmlspecialchars($nombre_producto); ?>" readonly>

            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($descripcion); ?>" readonly>

            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>" readonly>

            <label for="precio">Precio</label>
            <input type="text" id="precio" name="precio" value="<?php echo htmlspecialchars($precio); ?>" readonly>

            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
    <?php
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">ERROR: Producto no encontrado</div>';
    }

    mysqli_close($conexion);
}
?>
