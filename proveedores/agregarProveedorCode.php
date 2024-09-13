<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nrc = $_POST['nrc'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];

    $consulta = "INSERT INTO proveedores (nrc, nombre, direccion, email, telefono, celular) 
                 VALUES ('$nrc', '$nombre', '$direccion', '$email', '$telefono', '$celular')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Agregado exitosamente</div>';
    } else {
        echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al agregar proveedor</div>';
    }

}
?>