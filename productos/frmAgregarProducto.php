<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="stylesProducto.css"> <!-- Cambia el archivo CSS si es necesario -->
</head>
<body>
<div class="container">
    <form method="post" class="form">
        <h2>Agregar Producto</h2>
        <?php
        include("agregarProductoCode.php");
        ?>
        <label for="cod_producto">Código del Producto:</label>
        <input type="text" id="cod_producto" name="cod_producto" required>

        <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>

        <button type="submit">Agregar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
