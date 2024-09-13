<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Proveedores</title>
    <link rel="stylesheet" href="stylesProveedor.css">
</head>
<body>
<?php
include('../conexdb.php');
$consulta = "SELECT * FROM proveedores";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    ?>
    <table>
        <tr>
            <th>NRC</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Celular</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row["nrc"]); ?></td>
                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($row["direccion"]); ?></td>
                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                <td><?php echo htmlspecialchars($row["telefono"]); ?></td>
                <td><?php echo htmlspecialchars($row["celular"]); ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td colspan="6" style="text-align: center; border-top:2px solid white;">
                <button style="color: white; font-weight: bold; text-decoration: none;" onclick="location.href='../escritorioTrabajo.html'">REGRESAR</button>
            </td>
        </tr>
    </table>
    <?php
} else {
    echo "<h1 style='color: white;'>¡No se encuentran proveedores!</h1>";
}

?>
</body>
</html>
