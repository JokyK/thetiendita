<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="stylesCliente.css"> <!-- Cambia el archivo CSS si es necesario -->

</head>
<body>
<div class="container">
    <form method="post" class="form">
        <h2>Agregar Cliente</h2>
        <?php
        include("agregarClienteCode.php");
        ?>
        <label for="dui">DUI:</label>
        <input type="text" id="dui" name="dui" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="">Seleccione el sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <button type="submit">Agregar</button>
        <a href="../escritorioTrabajo.html">Regresar</a>
    </form>
</div>
</body>
</html>
