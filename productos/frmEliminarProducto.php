<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="stylesProducto.css"> <!-- Utiliza los mismos estilos que para productos -->
</head>
<body>
<div class="container">
    <?php
    include("eliminarProductoCode.php");
    ?>
    <form method="post" class="form">
        <h2>Eliminar Producto</h2>
        <label for="cod_producto">Código del Producto:</label>
        <input type="text" id="cod_producto" name="cod_producto" required>
        <button type="submit" name="btnEliminar">Eliminar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
