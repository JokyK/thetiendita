<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["btnEditar"])) {
        $nrc = $_POST["nrc"];
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $celular = $_POST["celular"];

        $consulta = "UPDATE proveedores SET nombre = '$nombre', direccion = '$direccion', email = '$email', telefono = '$telefono', celular = '$celular' WHERE nrc = '$nrc'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Editado exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al editar proveedor</div>';
        }
    }

}
?>
