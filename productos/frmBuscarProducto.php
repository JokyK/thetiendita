<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Producto</title>
    <link rel="stylesheet" href="stylesProducto.css">
</head>
<body>
<div class="container">
    <form action="buscarProductoCode.php" method="post" class="form">
        <h2>Buscar Producto</h2>
        <label for="cod_producto">Código del Producto:</label>
        <input type="text" id="cod_producto" name="cod_producto" required>

        <button type="submit">Buscar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
