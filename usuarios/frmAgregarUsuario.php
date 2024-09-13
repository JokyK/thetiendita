<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usaurio</title>
    <link rel="stylesheet" href="stylesUsuario.css">

</head>
<body>
<div class="container">
        <form method="post" class="form">
            <h2>Agregar Usuario</h2>
            <?php
            include("agregarUsuarioCode.php");
            ?>
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="contra" required>

            <label for="tipoUsuario">Rol de usuario:</label>
            <select id="tipoUsuario" name="tipoUsuario" required>
                <option value="">Seleccione un rol</option>
                <option value="administrador">Administrador</option>
                <option value="operador">Operador</option>
                <option value="usuario">Usuario</option>
            </select>

            <label for="fechaRegistro">Fecha y hora de registro:</label>
            <input type="datetime-local" id="fechaRegistro" name="fechaRegistro" required>
            <button type="submit">Agregar</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
</body>
</html>