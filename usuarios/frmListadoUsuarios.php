<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
    <link rel="stylesheet" href="stylesUsuario.css">
</head>
<body>
        <?php
        include('../conexdb.php');
        $consulta = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion,$consulta);
        if(mysqli_num_rows($resultado)> 0){
            ?>
            <table>
            <tr>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Tipo</th>
            <th>Ultimo Acceso</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($resultado)){
            ?>
                <tr>
                <td><?php  echo $row["nombre"]; ?></td>
                <td><?php  echo $row["contra"]; ?></td>
                <td><?php  echo $row["tipo"]; ?></td>
                <td><?php  echo$row["ultimo_acceso"]; ?></td>
                </tr>

        <?php
            }
            ?>
            <tr>
            
            <td colspan="4" style="text-align: center; border-top:2px solid white;" ><button style=" color:white; font-weight: bold; text-decoration: none; "  onclick="location.href='../escritorioTrabajo.html'">REGRESAR </button></td>
            </tr>
            

            <?php
        }else{
            echo"<h1 style='color:white;'>¡NO SE ENCUENTRAN USUARIOS!</h1>";
        }

        ?>

    </table>
</body>
</html>