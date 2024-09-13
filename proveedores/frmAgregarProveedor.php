<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proveedor</title>
    <link rel="stylesheet" href="stylesProveedor.css">
</head>
<body>
<div class="container">
    <form method="post" class="form">
        <h2>Agregar Proveedor</h2>
        <?php
        include("agregarProveedorCode.php");
        ?>
        <label for="nrc">NRC:</label>
        <input type="text" id="nrc" name="nrc" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celular" required>

        <button type="submit">Agregar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
