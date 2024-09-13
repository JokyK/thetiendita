<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link rel="stylesheet" href="stylesCliente.css"> <!-- Utiliza los mismos estilos que para cliente -->
</head>
<body>
    <?php
    include('../conexdb.php');
    $consulta = "SELECT * FROM cliente";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
    ?>
        <table>
        <tr>
            <th>DUI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Dirección</th>
            <th>Teléfono</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row["dui"]); ?></td>
                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($row["apellido"]); ?></td>
                <td><?php echo htmlspecialchars($row["sexo"]); ?></td>
                <td><?php echo htmlspecialchars($row["direccion"]); ?></td>
                <td><?php echo htmlspecialchars($row["telefono"]); ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="6" style="text-align: center; border-top:2px solid white;">
                <button style="color:white; font-weight: bold; text-decoration: none;" onclick="location.href='../escritorioTrabajo.html'">REGRESAR</button>
            </td>
        </tr>
        </table>
    <?php
    } else {
        echo "<h1 style='color:white;'>¡NO SE ENCUENTRAN CLIENTES!</h1>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>
