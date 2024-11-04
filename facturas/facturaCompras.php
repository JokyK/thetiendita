<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="stylesTransacciones.css">

</head>
<body>
<div class="container">
        <form action="generadaCompras.php" method="post" class="form">
            <h2>Reporte Compras</h2>
            <label for="factura">Ingrese número de factura:</label>
            <input type="text" id="factura" name="factura" required>

            <button type="submit">Buscar Compra</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
</body>
</html>