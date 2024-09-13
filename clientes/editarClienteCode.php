<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dui = $_POST['dui'];
    $consulta = "SELECT * FROM cliente WHERE dui = '$dui'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_assoc($resultado);

    if ($filas > 0) {
        $nombre = $filas["nombre"];
        $apellido = $filas["apellido"];
        $sexo = $filas["sexo"];
        $direccion = $filas["direccion"];
        $telefono = $filas["telefono"];
    ?>
    <link rel="stylesheet" href="stylesCliente.css">
    <body>
    <div class="container">
        <?php
        include("guardarClienteEditado.php");
        ?>
        <form method="post" class="form">
            <label for="dui">DUI</label>
            <input type="text" id="dui" name="dui" value="<?php echo htmlspecialchars($dui); ?>" readonly>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo htmlspecialchars($apellido); ?>" required>

            <label for="sexo">Sexo</label>
            <input type="text" id="sexo" name="sexo" value="<?php echo htmlspecialchars($sexo); ?>" required>

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo htmlspecialchars($direccion); ?>" required>

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>" required>

            <button type="submit" name="btnEditar">EDITAR</button>
            <a href="../escritorioTrabajo.html">Regresar</a>
        </form>
    </div>
    </body>
    <?php
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">ERROR: Cliente no encontrado</div>';
    }

}
?>
