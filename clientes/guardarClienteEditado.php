<?php
include('../conexdb.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["btnEditar"])) {
        $dui = $_POST["dui"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $sexo = $_POST["sexo"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $consulta = "UPDATE cliente SET nombre = '$nombre', apellido = '$apellido', sexo = '$sexo', direccion = '$direccion', telefono = '$telefono' WHERE dui = '$dui'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo '<div style="width: 100%; text-align: center; color: green; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">EDITADO exitosamente</div>';
        } else {
            echo '<div style="width: 100%; text-align: center; color: red; margin-top: 5px; margin-bottom: 20px; background-color: black; padding: 10px;">Error al EDITAR cliente</div>';
        }
    }
}

?>
