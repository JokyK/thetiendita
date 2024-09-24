<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver Venta</title>
    <link rel="stylesheet" href="stylesTransacciones.css">

</head>
<body>
<div class="container">
        <form method="post" class="form">
            <h2>Devolver Venta</h2>
            <?php include("devolucionVentasCode.php") ?>
            <label for="factura">Ingrese número de factura:</label>
            <input type="text" id="factura" name="factura" required>

            <button type="submit">Devolver Venta</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
</body>
</html>