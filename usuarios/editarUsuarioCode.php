<?php
include('../conexdb.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nombre = $_POST['nombre'];
    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_assoc($resultado);

    if($filas > 0){
        $contra = $filas["contra"];
        $tipo = $filas["tipo"];
        $ultimo_acceso = $filas["ultimo_acceso"];
    ?>
    <link rel="stylesheet" href="stylesUsuario.css">
        <body>
        <div class="container">
            <?php
            include("guardarUsuarioEditado.php");
            ?>
        <form method="post" class="form">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>" readonly>

            <label for="contra">Contraseña</label>
            <input type="text" id="contra" name="contra" value="<?php echo $contra ?>" required>

            <label for="tipo">Tipo de Usuario</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $tipo ?>" required>

            <label for="acceso">Ultimo acceso</label>
            <input type="datetime-local" id="acceso" name="acceso" value="<?php echo $ultimo_acceso ?>" required>
            <button type="submit" name="btnEditar">EDITAR</button>

            <a href="../escritorioTrabajo.html">Regresar</a>
            </form>
            </div>
        </body>
   <?php
    }else{
    echo "ERROR: DATOS INCORRECTOS";
    }

    mysqli_close( $conexion );
    }

?>