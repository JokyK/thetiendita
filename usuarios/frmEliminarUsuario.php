<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario</title>
    <link rel="stylesheet" href="stylesUsuario.css">
</head>
<body>
<div class="container">
    <?php
    include("eliminarUsuarioCode.php");
    ?>
        <form  method="post" class="form">
            <h2>ELIMINAR USUARIO</h2>
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit" name="btnEliminar">Eliminar</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
</body>
</html>