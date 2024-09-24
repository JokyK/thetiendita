<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="stylesProducto.css"> <!-- Utiliza los mismos estilos que para productos -->
</head>
<body>
    <?php
    include('../conexdb.php');
    $consulta = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
    ?>
        <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row["cod_producto"]); ?></td>
                <td><?php echo htmlspecialchars($row["nombre_producto"]); ?></td>
                <td><?php echo htmlspecialchars($row["descripcion"]); ?></td>
                <td><?php echo htmlspecialchars($row["cantidad"]); ?></td>
                <td><?php echo htmlspecialchars($row["precio"]); ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="5" style="text-align: center; border-top:2px solid white;">
                <button style="color:white; font-weight: bold; text-decoration: none;" onclick="location.href='../escritorioTrabajo.html'">REGRESAR</button>
            </td>
        </tr>
        </table>
    <?php
    } else {
        echo "<h1 style='color:white;'>¡NO SE ENCUENTRAN PRODUCTOS!</h1>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>
