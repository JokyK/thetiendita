<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proveedor</title>
    <link rel="stylesheet" href="stylesProveedor.css">
</head>
<body>
<div class="container">
    <?php
    include("eliminarProveedorCode.php");
    ?>
    <form method="post" class="form">
        <h2>Eliminar Proveedor</h2>
        <label for="nrc">NRC del Proveedor:</label>
        <input type="text" id="nrc" name="nrc" required>
        <button type="submit" name="btnEliminar">Eliminar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
