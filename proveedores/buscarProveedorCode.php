<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nrc = $_POST['nrc'];
    $consulta = "SELECT * FROM proveedores WHERE nrc='$nrc'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        $nombre = $fila["nombre"];
        $direccion = $fila["direccion"];
        $email = $fila["email"];
        $telefono = $fila["telefono"];
        $celular = $fila["celular"];
        ?>
        <link rel="stylesheet" href="stylesProveedor.css">
        <body>
        <div class="container">
            <?php include("guardarProveedorEditado.php"); ?>
            <form method="post" class="form">
                <label for="nrc">NRC</label>
                <input type="text" id="nrc" name="nrc" value="<?php echo htmlspecialchars($nrc); ?>" readonly>

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" readonly>

                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="<?php echo htmlspecialchars($direccion); ?>" readonly>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>

                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>" readonly>

                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" value="<?php echo htmlspecialchars($celular); ?>" readonly>

                <a href="../escritorioTrabajo.html">Regresar</a>
            </form>
        </div>
        </body>
        <?php
    } else {
        echo "<h1 style='color:red;'>¡Proveedor no encontrado!</h1>";
    }

    mysqli_close($conexion);
}
?>
