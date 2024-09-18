<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Productos</title>
    <link rel="stylesheet" href="stylesTransacciones.css">

</head>
<body>
<div class="container">
        <form action="verificarProductoVenta.php" method="post" class="form">
            <h2>Vender Productos</h2>
            <label for="codigo">Codigo de Producto:</label>
            <input type="text" id="codigo" name="codigo" required>

            <button type="submit">Verificar Producto</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
</body>
</html>