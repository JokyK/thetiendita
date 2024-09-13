<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Proveedor</title>
    <link rel="stylesheet" href="stylesProveedor.css">
</head>
<body>
<div class="container">
    <form action="buscarProveedorCode.php" method="post" class="form">
        <h2>Buscar Proveedor</h2>
        <label for="nrc">NRC del Proveedor:</label>
        <input type="text" id="nrc" name="nrc" required>
        <button type="submit">Buscar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>