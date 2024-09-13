<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Cliente</title>
    <link rel="stylesheet" href="stylesCliente.css">
</head>
<body>
<div class="container">
    <form action="buscarClienteCode.php" method="post" class="form">
        <h2>Buscar Cliente</h2>
        <label for="dui">DUI del Cliente:</label>
        <input type="text" id="dui" name="dui" required>

        <button type="submit">Buscar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>