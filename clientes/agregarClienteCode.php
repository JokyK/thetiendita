<?php
include("../conexdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dui = $_POST['dui'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];


    $consulta = "INSERT INTO cliente (dui, nombre, apellido, sexo, direccion, telefono) VALUES ('$dui', '$nombre', '$apellido', '$sexo', '$direccion', '$telefono')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Cliente agregado exitosamente</div>';
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al agregar cliente</div>';
    }

    mysqli_close($conexion);
}
?>
