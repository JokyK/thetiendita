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
    <body>
    <div class="container">
        <?php
        include("guardarProductoEditado.php");
        ?>
        <form method="post" class="form">
            <label for="cod_producto">Código del Producto</label>
            <input type="text" id="cod_producto" name="cod_producto" value="<?php echo htmlspecialchars($cod_producto); ?>" readonly>

            <label for="nombre_producto">Nombre del Producto</label>
            <input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo htmlspecialchars($nombre_producto); ?>" required>

            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($descripcion); ?>" required>

            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>" required>

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="<?php echo htmlspecialchars($precio); ?>" required>

            <button type="submit" name="btnEditar">Editar</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
    </body>
    <?php
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">ERROR: Producto no encontrado</div>';
    }
    

}
?>
