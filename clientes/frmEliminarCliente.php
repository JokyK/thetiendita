<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cliente</title>
    <link rel="stylesheet" href="stylesCliente.css"> <!-- Utiliza los mismos estilos que para cliente -->
</head>
<body>
<div class="container">
    <?php
    include("eliminarClienteCode.php");
    ?>
    <form method="post" class="form">
        <h2>ELIMINAR CLIENTE</h2>
        <label for="dui">DUI del Cliente:</label>
        <input type="text" id="dui" name="dui" required>
        <button type="submit" name="btnEliminar">Eliminar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
